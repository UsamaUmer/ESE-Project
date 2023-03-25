<?php

namespace App\Http\Controllers\Retailer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\History;
use App\Model\Admin\Retailer;
use App\Model\Admin\User;
use App\Model\Admin\Mobile;
use DB;
use Auth;
class HistoryController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth:retailer');
    }
    public function index()
    {
        $history=  History::distinct()->get(['mobile_id']);
       // $ownership= DB::table('mobiles')->select('OwnerShip')->get();
        
       // $history=History::all()->where('retailer_id',Auth::user()->id);
       //  $history=DB::table('histories')->select('*')->distinct()->get();
         return view('retailer.history.history',compact('history'));

         // 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('retailer.history.createHistory');
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
         'retailer_id'   =>'required',
         'user_id'   =>'required',
         'mobile_id'   =>'required', 
         'old_id'   =>'required',                
     ]);

        $history=new History();
        $retailer=DB::table('retailers')->select('id','cnic')
        ->where([['cnic',$request->retailer_id],['cnic',Auth::user()->cnic]])->first();
        
        $user=DB::table('users')->select('id','cnic','status')
        ->where('cnic',$request->user_id)->first();

        $mobile=DB::table('mobiles')->select('id','MobileCode','Ownership','user_id')
        ->where('MobileCode',$request->mobile_id)->first();

        $olduser=DB::table('users')->select('id','cnic','status')
        ->where('cnic',$request->old_id)->first();

        
        
        $history->mobile_id=$request->mobile_id;

        if ($retailer) {
           $history->retailer_id=$retailer->id;
           if ($user) {
               $history->user_id=$user->id;
               
                  if($mobile){
                    $history->mobile_id=$mobile->id;
                    if($olduser){

                        $history->old_id=$olduser->id;

                           if($olduser->id == $user->id){

                            return redirect(route('hist.create'))->with('msg','Old And New Cnic Are Same');
                           
                          
                            }

                     
                        else{
                             
                            if($mobile->user_id == $olduser->id)
                            {
                                $history->save();
                                $total=$mobile->Ownership+1;
                                DB::table('mobiles')->where('id',$mobile->id)->update(['Ownership'=>$total]);
                                DB::table('mobiles')->where('id',$mobile->id)->update(['user_id'=>$user->id]);
                     
        
                                if($user->status==0){
                                        DB::table('users')->where('id',$user->id)->update(['status'=>1]);
                                }
    
                                 $totalMb=DB::table('mobiles')->select('user_id')
                                ->where('user_id',$olduser->id)->count('user_id');
    
                                if($totalMb == 0){
                                        DB::table('users')->where('id',$olduser->id)->update(['status'=>0]);
                                }
        
                                return redirect(route('hist.index'));
                            }
                            else{
                                return redirect(route('hist.create'))->with('msg','Mobile IMEI Does Not Match With Old User CNIC'); 
                            }
                         
                            
                        }          

                    }
                    else{
                        return redirect(route('hist.create'))->with('msg','Old User Cnic Does Not Match');

                    }
            }
            else{

              return redirect(route('hist.create'))->with('msg','Mobile IMEI Does Not Match');   
          }      
      }
      else{

        return redirect(route('hist.create'))->with('msg','User Cnic Does Not Match');

        } // user Cnic bracket 

        }  // retailer Cnic bracket 
        else {

         return redirect(route('hist.create'))->with('msg','Retailer Cnic Does Not Match');
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
         $users=History::all()->where('mobile_id',$id);
         $gets=User::all();
          $getlast=  History ::all()->where('mobile_id',$id)->last();
         return view('retailer.history.userMobileHistory',compact('users','gets','getlast'));
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
