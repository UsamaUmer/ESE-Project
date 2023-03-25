<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Mobile extends Model
{
    
    // its inverse is in User Model

      public function user()
    {
        return $this->belongsTo('App\Model\Admin\User');
    }

    // its inverse is in Retailer Model

      public function retailer()
    {
        return $this->belongsTo('App\Model\Admin\Retailer');
    }

    // its inverse is in Device Model

      public function device()
    {
        return $this->belongsTo('App\Model\Admin\Device');
    }

  

      //its inverse is in Mobile Model

        public function report()
    {
        return $this->hasOne('App\Model\Admin\Ptarepoted');
    }

      // its inverse is in History Model
    
      public function history()
    {
        return $this->hasMany('App\Model\Admin\History');
    }
}
