<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BuyerSenderInvitationMail extends Mailable
{
    use Queueable, SerializesModels;


    public $buyer_email;
    public $seller_email;

    /**
     * Create a new message instance.
     */
    public function __construct($buyer_email,$seller_email)
    {
        $this->buyer_email = $buyer_email;
        $this->seller_email = $seller_email;
    }

    public function build()
    {
        return $this->subject("You're invited to ".config('app.name'))
        ->markdown('Mail.buyer_sender_invitation_mail', [
            'buyer_email' => $this->buyer_email,
            'seller_email' => $this->seller_email,
        ]);
    }

    
}
