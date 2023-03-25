<?php

namespace App\Http\Controllers\Retailer;
use App\Model\Admin\Mobile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AllDevices extends Controller
{
	  public function __construct()
    {
        $this->middleware('auth:retailer');
    }
    public function yes($id){

    	 $mobiles=Mobile::all()->where('user_id',$id);
    	 return view('retailer.users.SingleUserDevices',compact('mobiles'));
    }

     public function yes1($id){

    	 $mobile=Mobile::find($id);
    	return view('retailer.users.SingleMobileData',compact('mobile'));
    }
}
