<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Mobile;
class BlackListDevices extends Controller
{
	    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function black(){
    	 $bd=Mobile::all()->where('Status','=',0);
    	 return view('admin.registerDevices.blacklisted',compact('bd'));
    }

     public function user($id){
     	 $mobile=Mobile::find($id);
    	 return view('admin.registerDevices.UserDeviceInformation',compact('mobile'));
    }
}
