<?php
// In app/Http/Controllers/QuoteController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\QuoteRequestMail;
use App\Mail\UserQuoteRequestMail;

class QuoteController extends Controller
{
    public function sendQuoteRequest(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'message' => 'required|string',
        ]);

        // Send email to Archers Tours & Travel
        Mail::to('bdhadho@strathmore.edu')->send(new QuoteRequestMail($validated));

        // Send confirmation email to the user
        Mail::to($validated['email'])->send(new UserQuoteRequestMail($validated));

        return response()->json(['message' => 'Your request has been submitted successfully!']);
    }
}
