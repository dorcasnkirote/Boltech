<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessageToSender extends Mailable
{
    use SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @param array $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('We Have Received Your Message')
                    ->to($this->data['email'])
                    ->view('emails.contact-message-to-sender')
                    ->with([
                        'name' => $this->data['name'],
                        'subject' => $this->data['subject'],
                        'content' => $this->data['content'],
                    ]);
    }
}
