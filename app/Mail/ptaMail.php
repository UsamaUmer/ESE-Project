<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ptaMail extends Mailable
{
    use Queueable, SerializesModels;
    public $msg,$msg1,$msg2,$msg3,$msg4;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($first,$second,$third,$fourth,$five)
    {
      $this->msg=$first;
      $this->msg1=$second;
      $this->msg2=$third;
      $this->msg3=$fourth;
      $this->msg4=$five;
  }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('ptaMail')->to($this->msg);
    }
}
