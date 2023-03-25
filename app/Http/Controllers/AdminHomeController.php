<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Admin\Admin;
use DB;
class AdminHomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $count=DB::table('shops')->select('id','Status')->where('Status','=',0)->count('id');
        $registerShops=DB::table('shops')->select('id','Status')->where('Status','=',1)
        ->count('id');

        $registerAdmins=DB::table('admins')->select('id')->count('id');
        $counts=DB::table('retailers')->select('id','Status')->where('Status','=',0)->count('id');

        $registerRetailers=DB::table('retailers')->select('id','Status')->where('Status','=',1)->count('id');

        $registerUsers=DB::table('users')->select('id','Status')->where('Status','=',1)->count('id');

        $registerDevices=DB::table('mobiles')->select('id')->count('id');
          
        $blackListed=DB::table('mobiles')->select('id','Status')->where('Status','=',0)->count('id');

        session()->put('VAR1',$counts);
        session()->put('VAR',$count);


        return view('admin.home',compact(['count','counts','registerShops','registerAdmins','registerRetailers','registerUsers','registerDevices','blackListed']));
    }
}
