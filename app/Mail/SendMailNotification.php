<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class SendMailNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $notification;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contact $notification)
    {
        $this->notification = $notification; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.test');
    }
}
