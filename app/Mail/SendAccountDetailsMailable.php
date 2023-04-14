<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendAccountDetailsMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $user, $account_number, $password;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user,$account_number, $password)
    {
        $this->subject("Account Details");
        $this->user = $user;
        $this->account_number = $account_number;
        $this->password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.account-details');
    }
}
