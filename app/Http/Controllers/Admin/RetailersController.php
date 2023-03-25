<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Retailer;
use App\Model\Admin\Shop;
use DB;
class RetailersController extends Controller
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
        $retailor=DB::table('retailers')->select('id','Name','Cnic','Status','Phone','state')
        ->where([['Status','=',1],['state','=',0]])->get();
        $count=DB::table('retailers')->select('id','Status')->where('Status','=',0)->count('id');
        session()->put('VAR1',$count);
        return view('admin.retailers.Allretailers',compact('retailor','count'));
    }

    public function NonRegisterRetailers(){

        $retailor=DB::table('retailers')->select('id','Name','Cnic','Status','Phone')->where('Status','=',0)->get();
        return view('admin.retailers.NonregisterRetailers',compact('retailor'));
    }

    public function create()
    {
        return view('admin.retailers.retailer');
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
      'Cnic'=>'unique:retailers',
      'Password'=>['required','confirmed','min:6'],
  ]);

        // here shop id did also match

     // return $shopId=Shop::find($request->shop)->where('state','=',0)->get();
     // $shopId=DB::table('shops')->select('id','state')
     // ->where([['id', '=',$request->shop],['state','=','0']])
     // ->get();

     $shopId=Shop::find($request->shop);


     if ($shopId){
        $retailer= new Retailer();
        $retailer->Name=$request->Name;
        $retailer->Cnic=$request->Cnic;
        $retailer->Address=$request->Address;
        $retailer->Phone=$request->Phone;
        $retailer->Email=$request->Email;
        $retailer->Password=bcrypt($request->Password);
        $retailer->shop_id=$request->shop;
        $retailer->save();
    }
    else{

        return redirect(route('retailer.create'))->with('msg','Shop Id Does Not Match');
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

        $retailor=Retailer::find($id);
        return view('admin.retailers.CompleteInformation',compact('retailor'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $done =DB::table('retailers')->where('id',$id)->update(['state'=>1]);
        //Retailer::where('id',$id)->delete();
         if ($done) {
             
            return redirect(route('retailer.index'));
         }
        
    }
}
