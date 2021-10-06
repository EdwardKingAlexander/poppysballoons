<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $firstName;
    public $lastName;
    public $emailFrom;
    public $phone;
    public $title;
    public $content;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($firstName, $lastName, $emailFrom, $phone, $title, $content)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->emailFrom = $emailFrom;
        $this->phone = $phone;
        $this->title = $title;
        $this->content = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->view('emails.form-submitted')
        ->from($this->emailFrom)
        ->subject($this->title)
        ->replyTo(env('MAIL_FROM_ADDRESS'));
    }
}
