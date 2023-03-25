<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin\Device;
use Illuminate\Http\Request;
use DB;
class DevicesController extends Controller
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
         $devices=Device::all()->where('state',0);
        return view('admin.devices.Alldevices',compact('devices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.devices.device');
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
            'Type'=>['unique:devices'],                          
          ]);
         $device=new Device();
         $device->Type=$request->Type;
         $device->save();
        return redirect(route('device.index'));
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

        $device=Device::find($id);
        return view('admin.devices.edit',compact('device'));
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
          $this->validate($request,[
            'Type'=>['unique:devices'],                          
          ]);
        $device=Device::find($id);
         $device->Type=$request->Type;
         $device->save();
         return redirect(route('device.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $done=DB::table('devices')->where('id',$id)->update(['state' => 1]);
         if ($done==true) {
             return redirect(route('device.index'));
            
         }
     
        
    }
}
