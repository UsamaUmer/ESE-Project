<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Pta extends Model
{
   
    // its inverse is in Pta repoted model
	public function reports()
	{
		return $this->hasMany('App\Model\Admin\Ptarepoted');
	}
}
