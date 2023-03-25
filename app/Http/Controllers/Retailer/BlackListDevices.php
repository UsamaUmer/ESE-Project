<?php

namespace App\Http\Controllers\Retailer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Mobile;
class BlackListDevices extends Controller
{
	  public function __construct()
    {
        $this->middleware('auth:retailer');
    }
    public function black(){
    	 $bd=Mobile::all()->where('Status','=',0);
    	 return view('retailer.registerDevices.blacklisted',compact('bd'));
    }

     public function user($id){
     	 $mobile=Mobile::find($id);
    	 return view('retailer.registerDevices.UserDeviceInformation',compact('mobile'));
    }
}
