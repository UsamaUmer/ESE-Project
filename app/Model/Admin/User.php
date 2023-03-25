<?php

namespace App\Model\Admin;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','retailer_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    //its inverse is in Retailer Model

    public function retailer()
    {
        return $this->belongsTo('App\Model\Admin\Retailer');
    }

       // its inverse is in Mobile Model

    public function mobiles()
    {
        return $this->hasMany('App\Model\Admin\Mobile');
    }

    // its inverse is in History Model
      public function history()
    {
        return $this->hasMany('App\Model\Admin\History');
    }
}
