<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ResetPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user_email;

    /**
     * Create a new message instance.
     */
    public function __construct($user_email,$token)
    {
        $this->user_email = $user_email;
        $this->token = $token;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Reset Password Mail',
        );
    }

    public function build()
    {
        return $this->subject("Password Reset " . config('app.name'))
        ->markdown('Mail.forgetPassword', [
            'user_email' => $this->user_email,
            'token' => $this->token
        ]);
    }
}
