<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
        //its inverse is in Admin Model

    public function admin()
    {
        return $this->belongsTo('App\Model\Admin\Admin');
    }

   // its inverse is in Retailer Model

    public function retailers()
    {
        return $this->hasMany('App\Model\Admin\Retailer');
    }
}
