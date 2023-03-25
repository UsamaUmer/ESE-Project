<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
	// its inverse is in user model
    public function user()
    {
        return $this->belongsTo('App\Model\Admin\User');
    }

    // its inverse is in Retailer model
    public function retailer()
    {
        return $this->belongsTo('App\Model\Admin\Retailer');
    }

      // its inverse is in Mobile Model
      public function mobile()
    {
        return $this->belongsTo('App\Model\Admin\Mobile');
    }
}
