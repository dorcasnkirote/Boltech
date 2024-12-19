<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessageToAdmin;
use App\Mail\ContactMessageToSender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'content' => 'required|string',
            'phone' => 'nullable|string|max:15',  // Optional phone field with a maximum length of 15 characters
        ]);

        // Send email to Archers Tours & Travel Ltd.
        Mail::send('emails.contact-message-to-admin', $validatedData, function ($message) use ($validatedData) {
            $message->to('bdhadho@strathmore.edu')
                    ->subject('New Contact Message');
        });

        // Send confirmation email to the sender
        Mail::send('emails.contact-message-to-sender', $validatedData, function ($message) use ($validatedData) {
            $message->to($validatedData['email'])
                    ->subject('We Have Received Your Message');
        });

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
