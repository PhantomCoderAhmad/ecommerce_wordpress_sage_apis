<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contactData;

    public function __construct($contactData)
    {
        $this->contactData = $contactData;
    }

    public function build()
    {
        return $this
            ->subject('New Contact Request from ' . $this->contactData['name'])
            ->view('emails.contact_request'); // Make sure to create this view
    }
}
