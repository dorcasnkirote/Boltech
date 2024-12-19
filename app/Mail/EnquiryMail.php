<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    public $enquiry;

    public function __construct($enquiry)
    {
        $this->enquiry = $enquiry;
    }

    public function build()
    {
        return $this->view('emails.enquiry')
                    ->with([
                        'name' => $this->enquiry['name'],
                        'email' => $this->enquiry['email'],
                        'phone' => $this->enquiry['phone'],
                        'subject' => $this->enquiry['subject'],
                        'package_details' => $this->enquiry['package_details'],
                    ]);
    }
}
