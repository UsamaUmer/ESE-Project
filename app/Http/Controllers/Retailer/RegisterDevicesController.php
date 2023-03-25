<?php

namespace App\Http\Controllers\Retailer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Mobile;
use App\Model\Admin\Retailer;
use App\Model\Admin\User;
use App\Model\Admin\Device;
use DB;
use Auth;
class RegisterDevicesController extends Controller
{
   public function __construct()
   {
    $this->middleware('auth:retailer');
}
public function index()
{
    $RegDevices=Mobile::all()->where('retailer_id',Auth::user()->id);
   return view('retailer.registerDevices.AllregisterDevicesAgainstUser',compact('RegDevices'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $devices=Device::all()->where('state',0);
       return view('retailer.registerDevices.RegisterDevice',compact('devices'));
   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
         'MobileCode'=>['unique:mobiles'],
         'device_id'=>'required',
     ]);
       $regDevc=new Mobile();
       $regDevc->MobileCode=$request->MobileCode;
       $regDevc->Status=$request->Status;
       $regDevc->Brand=$request->Brand;
       $regDevc->device_id=$request->device_id;
       $hy=$request->user_id;
       $retailerId=DB::table('retailers')->select('id','cnic')
       ->where('cnic',$request->retailer_id)->first();
       $user=DB::table('users')->select('id','cnic')
       ->where('cnic',$request->user_id)->first();
       if ($retailerId) {
        $regDevc->retailer_id=$retailerId->id;
        if ($user) {
         $regDevc->user_id=$user->id;
         DB::table('users')->where('id',$user->id)->update(['status'=>1]);
         $regDevc->save();

         return redirect(route('regDevice.index'));
     }
     else{
        return redirect(route('regDevice.create'))->with('msg','User Cnic Does Not Match');
    }
}
else{
 return redirect(route('regDevice.create'))->with('msg','Retailer Cnic Does Not Match');
}        
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mobile=Mobile::find($id);
        return view('retailer.registerDevices.edit',compact('mobile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mobile=Mobile::find($id);
        $mobile->MobileCode=$request->MobileCode;
        $mobile->Status=$request->Status;
        $mobile->Brand=$request->Brand;
         $DeviceId=DB::table('devices')->select('id','Type')
        ->where('Type',$request->device_id)->first();

        $mobile->device_id=$DeviceId->id;

        $usersId=DB::table('users')->select('id','cnic')
        ->where('cnic',$request->user_id)->first();

        $mobile->user_id=$usersId->id;
        $retailerId=DB::table('retailers')->select('id','cnic')
        ->where('cnic',$request->retailer_id)->first();
        if ($retailerId) {
            $mobile->retailer_id=$retailerId->id;
            $mobile->save();

            return redirect(route('regDevice.index'));
        }
        else{
           return redirect(route('regDevice.edit',$mobile->id))->with('msg','Retailer Cnic Does Not Match');
       }
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
