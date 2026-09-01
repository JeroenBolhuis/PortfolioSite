<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Throwable;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        if ($request->filled('website')) {
            return $this->successResponse($request);
        }

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'max:254', Rule::email()->rfcCompliant(strict: false)],
            'message' => ['required', 'string', 'max:5000'],
        ], [
            'name.required' => __('Please enter your name.'),
            'name.max' => __('Your name may not be longer than 100 characters.'),
            'email.required' => __('Please enter your email address.'),
            'email.email' => __('Please enter a valid email address.'),
            'email.max' => __('Your email address may not be longer than 254 characters.'),
            'message.required' => __('Please enter a message.'),
            'message.max' => __('Your message may not be longer than 5,000 characters.'),
        ]);

        try {
            Mail::to('jeroen.bolhuis@hotmail.com')->send(new ContactFormSubmission($validated));
        } catch (Throwable $exception) {
            Log::error('Contact form submission failed.', [
                'exception' => $exception::class,
                'message' => $exception->getMessage(),
            ]);

            if ($request->expectsJson()) {
                return response()->json([
                    'message' => __('Your message could not be sent. Please try again later.'),
                ], 500);
            }

            return redirect()->to(route('home').'#contact')
                ->withInput()
                ->with('error', __('Your message could not be sent. Please try again later.'));
        }

        return $this->successResponse($request);
    }

    private function successResponse(Request $request)
    {
        $message = __('Your message has been sent successfully!');

        if ($request->expectsJson()) {
            return response()->json(['message' => $message]);
        }

        return redirect()->to(route('home').'#contact')->with('success', $message);
    }
}
