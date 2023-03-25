<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ShopMail extends Mailable
{
    use Queueable, SerializesModels;
public $SenderMail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mail)
    {
          $this->SenderMail=$mail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('ShopMail')->to($this->SenderMail);
    }
}
