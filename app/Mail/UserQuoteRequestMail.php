<?php

// In app/Mail/UserQuoteRequestMail.php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserQuoteRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    public function __construct($details)
    {
        $this->details = $details;
    }

    public function build()
    {
        return $this->subject('Thank You for Your Quote Request')
                    ->view('emails.user_quote_request');
    }
}
