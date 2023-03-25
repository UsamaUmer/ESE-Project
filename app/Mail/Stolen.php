<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Stolen extends Mailable
{
    use Queueable, SerializesModels;

    public $shopName,$shopAddress,$shopCity,$shopPhone,$shopProvince,$no;

    public function __construct($shopName,$shopAddress,$shopCity,$shopPhone,$shopProvince,$yes)
    {
         $this->no=$yes;
         $this->shopName=$shopName;
         $this->shopAddress=$shopAddress;
         $this->shopCity=$shopCity;
         $this->shopPhone=$shopPhone;
         $this->shopProvince=$shopProvince;
         
    }

   
    public function build()
    {
        return $this->markdown('StolenDevicesData')->to('laravelprogrammers@gmail.com');
     
    }
}
