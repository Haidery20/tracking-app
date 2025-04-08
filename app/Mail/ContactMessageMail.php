<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\ContactMessage;

class ContactMessageMail extends Mailable
{
    use Queueable, SerializesModels;

    public ContactMessage $message;

    /**
     * Create a new message instance.
     *
     * @param ContactMessage $message
     * @return void
     */
    public function __construct(ContactMessage $message)
    {
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Contact Message - KONEKTA')
                    ->markdown('emails.contact-message')
                    ->with([
                        'message' => $this->message
                    ]);
    }
}
