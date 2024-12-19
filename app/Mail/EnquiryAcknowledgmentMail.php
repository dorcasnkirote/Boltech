<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnquiryAcknowledgmentMail extends Mailable
{
    use Queueable, SerializesModels;

    public $enquiryData;

    public function __construct($enquiryData)
    {
        $this->enquiryData = $enquiryData;
    }

    public function build()
    {
        return $this->subject('Thank You for Your Enquiry')
                    ->view('emails.enquiry_acknowledgment')
                    ->with('enquiryData', $this->enquiryData);
    }
}
