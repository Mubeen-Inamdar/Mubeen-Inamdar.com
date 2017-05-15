<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactFormNotification extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * The name of the contact.
     *
     * @var String
     */
    public $name;

    /**
     * The email of the contact.
     *
     * @var String
     */
    public $email;

    /**
     * The message of the contact.
     *
     * @var String
     */
    public $contactMessage;

    /**
     * Create a new message instance.
     *
     * @param String $name
     * @param String $email
     * @param String $contactMessage
     */
    public function __construct(String $name, String $email, String $contactMessage)
    {
        $this->name           = $name;
        $this->email          = $email;
        $this->contactMessage = $contactMessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact-form-notification')
                    ->text('emails.contact-form-notification-plain')
                    ->subject('Message From ' . $this->name)
                    ->from($this->email, $this->name)
                    ->replyTo($this->email, $this->name);
    }
}
