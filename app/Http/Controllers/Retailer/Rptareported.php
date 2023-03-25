<?php

namespace App\Http\Controllers\Retailer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Model\Admin\Ptarepoted;
use Auth;
class Rptareported extends Controller
{
   public function __construct()
   {
    $this->middleware('auth:retailer');
}
public function index()
{
        // $complains=DB::table('ptarepoteds')->select('id','pta_id','mobile_id','retailer_id','created_at','status')->where('status',0)->get();


    $complains = DB::table('ptarepoteds')
    ->join('mobiles', 'mobiles.id', '=', 'ptarepoteds.mobile_id')
    ->join('ptas', 'ptas.id', '=', 'ptarepoteds.pta_id')
    ->join('retailers', 'retailers.id', '=', 'ptarepoteds.retailer_id')
    ->select(['ptarepoteds.status','ptarepoteds.id', 'mobiles.MobileCode','ptas.Email'
     ,'retailers.cnic','ptarepoteds.created_at'])
    ->where('ptarepoteds.status','=',0)
    ->get();
    return view('retailer.pta.AllInformation',compact('complains'));
}


public function gain()
{
        // $complains=DB::table('ptarepoteds')->select('id','pta_id','mobile_id','retailer_id','created_at','status')->where('status',0)->get();


    $complains = DB::table('ptarepoteds')
    ->join('mobiles', 'mobiles.id', '=', 'ptarepoteds.mobile_id')
    ->join('ptas', 'ptas.id', '=', 'ptarepoteds.pta_id')
    ->join('retailers', 'retailers.id', '=', 'ptarepoteds.retailer_id')
    ->select(['ptarepoteds.status','ptarepoteds.id','mobiles.MobileCode','ptas.Email','retailers.cnic','ptarepoteds.created_at'])
    ->where([
     ['ptarepoteds.status','=',1],
     ['ptarepoteds.retailer_id','=',Auth::user()->id]
 ])->get();
    return view('retailer.pta.alls',compact('complains'));
}



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mailss=DB::table('ptas')->select('id','Email')->where('state',0)->get();
        return view('retailer.pta.pta',compact('mailss'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $messages=[
         'required' =>'PTA Mail Is Required'
     ];
     $this->validate($request,[

         'pta_id'=>'required',
     ],$messages);
     $rsend=new Ptarepoted();

     $rsend->mobile_id=$request->mobile_id;

     $rsend->pta_id=$request->pta_id;

     $retailerId=DB::table('retailers')->select('id','cnic')
     ->where('cnic',$request->retailer_id)->first();

     $mobile=DB::table('mobiles')->select('id','MobileCode','user_id')
     ->where('MobileCode',$request->mobile_id)->first();



     if ($retailerId) {
        $rsend->retailer_id=$retailerId->id;
        if($mobile) {

          $checkAlreadComplain=DB::table('ptarepoteds')->select('id','status','mobile_id')
          ->where('mobile_id',$mobile->id)->first();


              // if (@$checkAlreadComplain->status!==0 || @$checkAlreadComplain->status!==1) {
          if (@$checkAlreadComplain->status==1) {
              return redirect(route('ptareportt.create'))->with('msg1','Complain Already Sent At this IMEI');

          } 
          else {

          
         

          $rsend->mobile_id=$mobile->id;
         
          $rsend->save();
          return redirect(route('ptareportt.index'));
       

  }       
}
else{
    return redirect(route('ptareportt.create'))->with('msg1','Mobile IMEI Does Not Match');
}
}
else{
 return redirect(route('ptareportt.create'))->with('msg1','Retailer Cnic Does Not Match');
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
