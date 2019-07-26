<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailResetToken extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public $token;

    /**
     * Create a new message instance.
     */
    public function __construct($usr, $tk)
    {
        $this->user = $usr;
        $this->token = $tk;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@deeperlifeonline.org')
                    ->view('emails.resettoken');
    }
}
