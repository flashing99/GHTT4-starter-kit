<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Model\User;

class InscriptionMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user_code;
    public $user_name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($code, $name)
    {
        $this->user_code = $code;
        $this->user_name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //$user_code = User::$_GET('user_code');
        return $this->markdown('emails.welcome', ['user_code' => $this->user_code, 'user_name' => $this->user_name]);
    }
}
