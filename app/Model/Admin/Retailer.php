<?php

namespace App\Model\Admin;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Retailer extends Authenticatable
{
      use Notifiable;
      //its inverse is in Shop Model

    public function shop()
    {
        return $this->belongsTo('App\Model\Admin\Shop');
    }


       // its inverse is in User Model

    public function users()
    {
        return $this->hasMany('App\Model\Admin\User');
    }


       // its inverse is in Mobile Model

    public function mobiles()
    {
        return $this->hasMany('App\Model\Admin\Mobile');
    }


      // its inverse is in Ptarepoted Model

    public function reports()
    {
        return $this->hasMany('App\Model\Admin\Ptarepoted');
    }

    // its inverse is in History Model
    
      public function history()
    {
        return $this->hasMany('App\Model\Admin\History');
    }



    

}
