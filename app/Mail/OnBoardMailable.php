<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OnBoardMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $account_number;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($account_number)
    {
        $this->account_number = $account_number;
        $this->subject('Welcome On Board');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.onboard');
    }
}
