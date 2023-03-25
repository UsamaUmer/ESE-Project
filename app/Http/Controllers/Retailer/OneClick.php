<?php

namespace App\Http\Controllers\Retailer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Mail;
use App\Mail\Stolen;
use Auth;
class OneClick extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

   
    public function create()
    {
        //
    }

 

    public function store(Request $request)
    {
        
        
         $record=DB::table('mobiles')->select('MobileCode','Status')
        ->where('MobileCode',$request->search)->first();
        
        if($record ==true){

            if($record->Status == 0){
                
            
              $users = DB::table('mobiles')
                ->join('retailers','retailers.id','=','mobiles.retailer_id')
                ->join('shops','shops.id','=','retailers.shop_id')
                ->join('users','mobiles.user_id','=','users.id')
                ->select('mobiles.retailer_id','retailers.shop_id',
                         'shops.Name','shops.Address','shops.City','shops.Phone','shops.Province',
                         'mobiles.id','mobiles.MobileCode','mobiles.Brand','mobiles.Status','mobiles.Recapture',
                         'mobiles.Ownership','mobiles.updated_at',
                         'mobiles.user_id',
                         'users.name','users.email','users.cell','users.cnic','users.address','users.created_at')
                         ->where('mobiles.MobileCode',$request->search)->first();
                   
 
                Mail::send(new Stolen($users->Name,$users->Address,$users->City,$users->Phone,$users->Province,
                $users->MobileCode,$users->cnic,$users->email));


                return redirect(route('admins.home1'))->with('msg','Stolen Mobile');
                
                 
               
           }
           else{
             

                $users = DB::table('mobiles')
                ->join('retailers','retailers.id','=','mobiles.retailer_id')
                ->join('shops','shops.id','=','retailers.shop_id')
                ->join('users','mobiles.user_id','=','users.id')
                ->select('mobiles.retailer_id','retailers.shop_id',
                         'shops.Name','shops.Address','shops.City','shops.Phone','shops.Province',
                         'mobiles.MobileCode','mobiles.Brand','mobiles.Status','mobiles.Recapture',
                         'mobiles.Ownership','mobiles.updated_at',
                         'mobiles.user_id',
                         'users.name','users.email','users.cell','users.cnic','users.address','users.created_at')
                         ->where('mobiles.MobileCode',$request->search)->first();
                         return view('retailer.oneClick.oneclick',compact('users'));

              
               
           }

        }
        else{

            return redirect(route('admins.home1'))->with('msg','IMEI Is Not Correct');

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
        //
    }
}
