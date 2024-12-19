<?php
namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessageToAdmin extends Mailable
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
        // Ensure all fields are strings (this is a safeguard).
        $this->data = [
            'name' => (string) $data['name'],
            'email' => (string) $data['email'],
            'subject' => (string) $data['subject'],
            'phone' => (string) $data['phone'],  // Ensure it's a string
            'content' => (string) $data['content'],  // Ensure it's a string
        ];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Contact Message')
                    ->to('bdhadho@strathmore.edu')
                    ->view('emails.contact-message-to-admin')
                    ->with($this->data);
    }
}
