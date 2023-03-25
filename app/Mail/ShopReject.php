<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ShopReject extends Mailable
{
    use Queueable, SerializesModels;
    public $SenderMail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($yes)
    {
        $this->SenderMail=$yes;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('ShopReject')->to($this->SenderMail);
    }
}
