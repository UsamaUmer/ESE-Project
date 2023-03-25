<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Model\Admin\Retailer;
use DB;
class UserController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $users=User::select('id','name','email','cnic','status')->where('status','=',1)->get();
        $mobiles=DB::table('mobiles')->select('user_id')->get();
        return view('admin.users.AllUsers',compact('users','mobiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function show($id)
    {
        $user=User::find($id);
        $count=DB::table('mobiles')->select('user_id')->where('user_id','=',$user->id)->count('user_id');
        return view('admin.users.show',compact('user','count'));
    }

       public function deviceless()
    {
        $users=DB::table('users')
       ->select('id','name','cnic','email','cell','address','created_at','status','state')
       ->where('status','=',0)->get();
       return view('admin.users.deviceless',compact('users'));
    }

    
    public function destroy($id)
    {
        User::where('id',$id)->delete();
        return redirect()->back();
    }


}
