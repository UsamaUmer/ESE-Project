<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{

 


    public function mobile()
    {
        return $this->hasOne('App\Model\Admin\Mobile');
    }
}
