<?php

namespace App\Model\Admin;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
class Admin extends Authenticatable
{

  use Notifiable,HasRoles;
    // its inverse is in Shop Model

    public function shops()
    {
        return $this->hasMany('App\Model\Admin\Shop');
    }


    // its inverse is in Ptarepoted Model

    public function reports()
    {
        return $this->hasMany('App\Model\Admin\Ptarepoted');
    }
    
}
