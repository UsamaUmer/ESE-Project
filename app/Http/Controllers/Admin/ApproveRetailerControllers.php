<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Retailer;
use App\Model\Admin\Shop;
use Mail;
use App\Mail\Rmail;
use App\Mail\RRMail;
use DB;
class ApproveRetailerControllers extends Controller
{
      public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $retailor=Retailer::find($id);
        return view('admin.retailers.ApproveForm',compact('retailor'));
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
        $retailer=Retailer::find($id);
        $retailer->name=$request->name;
        $retailer->cnic=$request->cnic;
        $retailer->address=$request->address;
        $retailer->phone=$request->phone;
        $retailer->email=$request->email;
        $retailer->password=$request->password;
        $retailer->status=$request->status;
        $retailer->shop_id=$request->shop;
        $shopData=Shop::find($request->shop);
        
        $retailer->save();
        Mail::send(new Rmail($request->shop,$shopData->email,$request->cnic));
        return redirect(route('retailer.index'));
    }

    
    public function destroy($id)
    {
       // $users=Retailer::where('id',$id)->delete();
        $users=DB::table('retailers')->select(['id','shop_id'])->where('id',$id)->first();
        //$users->shop_id;
        $shopData=Shop::find($users->shop_id);
         
         $done=Retailer::where('id',$id)->delete();
         
       
        if ($done==true) {
            Mail::send(new RRMail($shopData->email,$users->shop_id));
          return redirect(route('retailer.index'));
        }

    }
}
