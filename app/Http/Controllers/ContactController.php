<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        try {
            Mail::to('jeroen.bolhuis@hotmail.com')->send(new \App\Mail\ContactFormSubmission($validated));

            if ($request->expectsJson()) {
                return response()->json([
                    'message' => __('Your message has been sent successfully!')
                ]);
            }

            return redirect()->route('home', ['#contact'])->with('success', __('Your message has been sent successfully!'));
        } catch (\Exception $e) {
            \Log::error('Contact form submission failed: ' . $e->getMessage());
            
            if ($request->expectsJson()) {
                return response()->json([
                    'message' => __('Failed to send message. Please try again later.')
                ], 500);
            }

            return redirect()->route('home', ['#contact'])->with('error', __('Failed to send message. Please try again later.'));
        }
    }
}