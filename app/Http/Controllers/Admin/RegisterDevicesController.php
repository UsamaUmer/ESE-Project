<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Mobile;
use App\Model\Admin\Retailer;
use App\Model\Admin\User;
use App\Model\Admin\Device;
use DB;
class RegisterDevicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
         $RegDevices=Mobile::all();
        return view('admin.registerDevices.AllregisterDevicesAgainstUser',compact('RegDevices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $devices=Device::all()->where('state',0);
         return view('admin.registerDevices.RegisterDevice',compact('devices'));
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
      
      
        
        $regDevc->retailer_id=$request->retailer_id;
        $regDevc->user_id=$request->user_id;
         $retailerId=Retailer::find($request->retailer_id);
         $userId=User::find($request->user_id);

         if ($retailerId) {

            if ($userId) {
               DB::table('users')->where('id',$request->user_id)->update(['status'=>1]);
               $regDevc->save();
               
               return redirect(route('regDevc.index'));
           }
           else{
            return redirect(route('regDevc.create'))->with('msg','User Id Does Not Match');
           }
       }
       else{
           return redirect(route('regDevc.create'))->with('msg','Retailer Id Does Not Match');
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
        return view('admin.registerDevices.edit',compact('mobile'));
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
        $mobile->device_id=$request->device_id;
        $mobile->retailer_id=$request->retailer_id;
        $mobile->user_id=$request->user_id;
        $retailerId=Retailer::find($request->retailer_id);
        if ($retailerId) {
          $mobile->save();

          return redirect(route('regDevc.index'));
        }
        else{
         return redirect(route('regDevc.edit',$mobile->id))->with('msg','Retailer Id Does Not Match');
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
