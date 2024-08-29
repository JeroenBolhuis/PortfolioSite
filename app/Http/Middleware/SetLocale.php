<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->session()->has('locale')) {
            App::setLocale($request->session()->get('locale'));
        } else {
            $locale = $request->getPreferredLanguage(['nl', 'en']);
            App::setLocale($locale);
            $request->session()->put('locale', $locale);
        }
        return $next($request);
    }
}