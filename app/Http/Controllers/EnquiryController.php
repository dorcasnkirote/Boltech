<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnquiryMail;
use App\Mail\EnquiryAcknowledgmentMail;
use Exception;
use Illuminate\Support\Facades\Log;

class EnquiryController extends Controller
{
    public function sendEnquiry(Request $request)
    {
        // Validate form inputs
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|digits:10',
            'subject' => 'required|string|max:255',
            'package_details' => 'required|string',
            'package_id' => 'required|integer',
        ]);

        try {
            // Send enquiry email to the admin
            Mail::to('bdhadho@strathmore.edu')->send(new EnquiryMail($validated));

            // Send acknowledgment email to the enquirer
            Mail::to($validated['email'])->send(new EnquiryAcknowledgmentMail($validated));

            return redirect()->back()->with('success', 'Your enquiry has been sent, and a confirmation email has been sent to your email address!');
        } catch (Exception $e) {
            Log::error('Enquiry email failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'There was an issue sending your enquiry. Please try again later.');
        }
    }
}
