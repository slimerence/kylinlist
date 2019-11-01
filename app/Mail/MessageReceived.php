<?php

namespace App\Mail;

use App\Models\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MessageReceived extends Mailable
{
    use Queueable, SerializesModels;
    public $mail;

    /**
     * MessageReceived constructor.
     * @param Message $message
     */
    public function __construct(Message $message)
    {
        $this->mail = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('You have received a message from Kylinlist!')
            ->markdown(_get_frontend_path('emails.message.received'));
    }
}
