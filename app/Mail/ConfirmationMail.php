<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;


class ConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;
    public ConfirmationMail $event;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($event)
    {
        {
            $this->event = $event;
        }
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->view('mail')
            ->subject("Confirmación de registro en evento")
            ->with([
                "user" => $this->user,
                "event" => $this->event,
            ]);
    }
}
