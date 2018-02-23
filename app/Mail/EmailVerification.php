<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;

class EmailVerification extends Mailable
{
    use Queueable, SerializesModels;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->event = $event;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        //if success
        return $this->from(config('mail.from.address'), config('mail.from.name'))
            ->subject('Verification')
            ->view('emails.verification')
            ->with(['email_token' => 'token', 'email' => 'test@test.ru']);
    }
}
