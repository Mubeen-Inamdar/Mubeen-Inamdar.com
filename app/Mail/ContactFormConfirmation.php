<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactFormConfirmation extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * The name of the contact.
     *
     * @var String
     */
    public $name;

    /**
     * Create a new message instance.
     *
     * @param String $name
     */
    public function __construct(String $name)
    {
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact-form-confirmation')
                    ->text('emails.contact-form-confirmation-plain')
                    ->subject('Thanks For Getting In Touch');
    }
}
