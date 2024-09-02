<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function submit(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'email' => 'required|email',
        ],[
            'email.required' => __('validation.email_required'),
            'email.email'    => __('validation.email_invalid'),
        ]);
        
        $email = $validated['email'];
    
        // Send the email
        Mail::send('emails.contact', [], function ($message) use ($email) {
            $message->to($email)
                ->subject('De eerste stap naar EfficienC')
                ->from('jeroenbolhuis004@gmail.com', 'EfficiënC');
        });
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Je ontvangt binnenkort meer informatie!');
    }
    
}
