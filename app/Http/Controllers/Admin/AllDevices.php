<?php

namespace App\Http\Controllers\admin;
use App\Model\Admin\Mobile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AllDevices extends Controller
{
	    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function yes($id){

    	 $mobiles=Mobile::all()->where('user_id',$id);
    	 return view('admin.users.SingleUserDevices',compact('mobiles'));
    }

     public function yes1($id){

    	 $mobile=Mobile::find($id);
    	return view('admin.users.SingleMobileData',compact('mobile'));
    }
}
