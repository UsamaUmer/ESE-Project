<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Rmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $getMail,$shopId,$cnic;
    public function __construct($ShopId,$getMail,$cnic)
    {
        $this->shopId=$ShopId;
        $this->getMail=$getMail;
        $this->cnic=$cnic;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('retailerMail')->to($this->getMail);
    }
}
