<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $tel, $msg)
    {
        $this->name = $name;
        $this->email = $email;
        $this->tel = $tel;
        $this->msg = $msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('contact@flaresy.fr')
            ->view('emails.contact', [
                'name' => $this->name,
                'email' => $this->email,
                'tel' => $this->tel,
                'msg' => $this->msg
            ]);
    }
}
