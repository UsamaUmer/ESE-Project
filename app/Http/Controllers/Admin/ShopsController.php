<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Shop;
use App\Model\Admin\Admin;
use App\Model\Admin\Retailer;
use DB;
use Mail;
use App\Mail\ShopMail;

use App\Mail\ShopReject;
class ShopsController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $shops=DB::table('shops')->select('id','Name','City','Status','Phone','state')
        ->where([
                 ['Status','=',1],
                 ['state',0]
             ])->get();
        $count=DB::table('shops')->select('id','Status')->where('Status','=',0)->count('id');
        session()->put('VAR',$count);
        return view('admin.shops.RegisterShops',compact('shops','count'));
    }



    public function NonRegisterShops()
    {
        $shops=DB::table('shops')->select('id','Name','City','Status','Phone')->where('Status','=',0)->get();
        return view('admin.shops.NonRegisterShops',compact('shops'));

    }

    public function AllRetailers($id){

        $retailers=Retailer::all()->where('shop_id',$id);
        return view('admin.shops.AllRetailersBySingleShop',compact('retailers'));
    }

    public function create()
    {
        return view('admin.shops.shop');
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
         'Name'=>'required',
        
        'Phone'=>'required',
        'Province'=>'required',
        'City'=>'required',
        'Address'=>'required',
        'email'=>'required'
        ]);

        $shop=new Shop();

        $shop->name=$request->Name;
        $shop->Address=$request->Address;
        $shop->Phone=$request->Phone;
        $shop->City=$request->City;
        $shop->email=$request->email;
        $shop->Province=$request->Province;
        $shop->save();
    }

 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shops=Shop::find($id);
       
        return view('admin.shops.CompleteInformation',compact('shops'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
           $shops=Shop::find($id);
       
           return view('admin.shops.ApproveForm',compact('shops'));
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
        $shops=Shop::find($id);
        $shops->name=$request->Name;
        $shops->Address=$request->Address;
        $shops->Phone=$request->Phone;
        $shops->City=$request->City;
        $shops->Province=$request->Province;
        $shops->email=$request->email;
        $shops->Status=$request->Status;
        

         $adminId=DB::table('admins')->select('id','cnic','state')
        ->where([
                 ['cnic',$request->Admin],
                 ['state',0]
             ])->first();

         if ($adminId) {
             
             $shops->admin_id=$adminId->id;
             $shops->save();
            
             
             Mail::send(new ShopMail($request->email));
          //   Mail::send(new Rmail($request->email));
             return redirect(route('shop.index'));
         }
         else{
           

             return redirect(route('NonRegisterShops'))->with('msg','Admin Cnic Does Not Match');

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
        //Retailer::where('shop_id',$id)->delete();
    
     $shoped=Shop::find($id);
     Shop::find($id)->delete();
     $yes=$shoped->email;
     
     Mail::send(new ShopReject($yes));
     return redirect(route('shop.index'));
     
    }
}
