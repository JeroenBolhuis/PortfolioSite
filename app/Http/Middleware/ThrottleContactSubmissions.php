<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ThrottleContactSubmissions
{
    private const MAX_ATTEMPTS = 3;

    private const DECAY_SECONDS = 600;

    private const SESSION_KEY = 'contact_submission_attempts';

    public function handle(Request $request, Closure $next): Response
    {
        $now = now()->timestamp;
        $attempts = collect($request->session()->get(self::SESSION_KEY, []))
            ->filter(fn ($timestamp) => is_numeric($timestamp) && (int) $timestamp > $now - self::DECAY_SECONDS)
            ->map(fn ($timestamp) => (int) $timestamp)
            ->values()
            ->all();

        if (count($attempts) >= self::MAX_ATTEMPTS) {
            return $this->tooManyAttemptsResponse($request, max(1, $attempts[0] + self::DECAY_SECONDS - $now));
        }

        $attempts[] = $now;
        $request->session()->put(self::SESSION_KEY, $attempts);

        $response = $next($request);
        $response->headers->set('X-RateLimit-Limit', (string) self::MAX_ATTEMPTS);
        $response->headers->set('X-RateLimit-Remaining', (string) max(0, self::MAX_ATTEMPTS - count($attempts)));

        return $response;
    }

    private function tooManyAttemptsResponse(Request $request, int $retryAfter): Response
    {
        $message = __('Too many messages were submitted. Please wait 10 minutes and try again.');

        $response = $request->expectsJson()
            ? response()->json(['message' => $message], 429)
            : redirect()->to(route('home').'#contact')
                ->withInput($request->except(['_token', 'website']))
                ->with('error', $message);

        $response->headers->set('Retry-After', (string) $retryAfter);
        $response->headers->set('X-RateLimit-Limit', (string) self::MAX_ATTEMPTS);
        $response->headers->set('X-RateLimit-Remaining', '0');

        return $response;
    }
}
