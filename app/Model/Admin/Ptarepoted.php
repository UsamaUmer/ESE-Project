<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Ptarepoted extends Model
{
    
    //its inverse is in Admin Model

    public function admin()
    {
        return $this->belongsTo('App\Model\Admin\Admin');
    }

    //its inverse is in Retailer Model

    public function retailer()
    {
        return $this->belongsTo('App\Model\Admin\Retailer');
    }


      // its inverse is in Ptarepoted Model

        public function mobile()
    {
        return $this->belongsTo('App\Model\Admin\Mobile');
    }


    // its inverse is in Pta  model
     public function pta()
    {
        return $this->belongsTo('App\Model\Admin\Pta');
    }

  

}
