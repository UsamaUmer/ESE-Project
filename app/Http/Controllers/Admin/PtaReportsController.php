<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Model\Admin\Ptarepoted;
use Mail;
use App\Mail\ptaMail;
class PtaReportsController extends Controller
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
       $complains = DB::table('ptarepoteds')
       ->join('mobiles', 'mobiles.id', '=', 'ptarepoteds.mobile_id')
       ->join('ptas', 'ptas.id', '=', 'ptarepoteds.pta_id')
       ->join('retailers', 'retailers.id', '=', 'ptarepoteds.retailer_id')
       ->select(['ptarepoteds.status','ptarepoteds.id', 'mobiles.MobileCode','ptas.Email'
           ,'retailers.cnic','ptarepoteds.created_at'])
       ->where('ptarepoteds.status','=',0)
       ->get();
       return view('admin.ptaReported.RequestsForPta',compact('complains'));
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('admin.ptaReported.report');
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

    public function gainReported()
    {
        // $complains=DB::table('ptarepoteds')->select('id','pta_id','mobile_id','retailer_id','created_at','status')->where('status',0)->get();
      

        $complains = DB::table('ptarepoteds')
        ->join('mobiles', 'mobiles.id', '=', 'ptarepoteds.mobile_id')
        ->join('ptas', 'ptas.id', '=', 'ptarepoteds.pta_id')
        ->join('retailers', 'retailers.id', '=', 'ptarepoteds.retailer_id')
        ->select(['ptarepoteds.status','ptarepoteds.id', 'mobiles.MobileCode','ptas.Email'
           ,'retailers.cnic','ptarepoteds.created_at'])
        ->where('ptarepoteds.status','=',1)
        ->get();
        return view('admin.ptaReported.reported',compact('complains'));
    }


    public function edit($id)
    {
      

      

        $data=Ptarepoted::find($id);
        return view('admin.ptaReported.report',compact('data'));
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
       $data=Ptarepoted::find($id);


       $mobile=DB::table('mobiles')->select('id','MobileCode','user_id')
       ->where('MobileCode',$request->mobile_id)->first();
       $data->mobile_id=$mobile->id;
       

       $userss=DB::table('users')->select('id','cnic','cell','email')
       ->where('id',$mobile->user_id)->first();
       
       
       
       $pta=DB::table('ptas')->select('id','Email')
       ->where('Email',$request->pta_id)->first();
       $data->pta_id=$pta->id;

       $retailer=DB::table('retailers')->select('id','cnic')
       ->where('cnic',$request->retailer_id)->first();
       $data->retailer->id=$retailer->id;

       $user=DB::table('admins')->select('id','cnic')
       ->where('cnic',$request->admin_id)->first();


       if ($user) {
        $data->status=$request->status;            
        $data->admin_id=$user->id;
        $data->save();

        
        
        
        Mail::send(new ptaMail($pta->Email,$userss->cnic,$userss->cell,
            $userss->email,$mobile->MobileCode));

        return redirect(route('ptaRep.index'));
    } else {
       return redirect(route('ptaRep.index'))->with('msg1','Admin Cnic Is Incorrect');
   }
   



       // return $user->id;
       // $data->mobile_id=$user->id;
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
