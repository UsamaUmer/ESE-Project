<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Mobile;
use DB;
class HomeController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth')->except(['index','about','contact','blacks1']);
    }

    public function index(){

                               $count=DB::table('shops')->select('id','Status')->where('Status','=',0)->count('id');
        $registerShops=DB::table('shops')->select('id','Status')->where('Status','=',1)
        ->count('id');

        $registerAdmins=DB::table('admins')->select('id')->count('id');
        $counts=DB::table('retailers')->select('id','Status')->where('Status','=',0)->count('id');

        $registerRetailers=DB::table('retailers')->select('id','Status')->where('Status','=',1)->count('id');

        $registerUsers=DB::table('users')->select('id','Status')->where('Status','=',1)->count('id');

        $registerDevices=DB::table('mobiles')->select('id')->count('id');
          
        $blackListed=DB::table('mobiles')->select('id','Status')->where('Status','=',0)->count('id');

       


        return view('user.home',compact(['count','counts','registerShops','registerAdmins','registerRetailers','registerUsers','registerDevices','blackListed']));
       
    	
    }

    public function about(){

    	return view('user.about');
    }

    public function mobileSpec($id){
        

         $mobile=Mobile::find($id);
        return view('users.MobileSpecification',compact('mobile'));
    }

    public function profile(){
        
        return view('users.home');
                              }

    public function contact(){

    	return view('user.contact');
    }

    public function getDeveices($id){
         $mobiles=Mobile::all()->where('user_id',$id);
         return view('users.owningDevices',compact('mobiles'));
    }

     public function service(){

    	return view('user.services');
    }

     public function blacks(){
      
        $mobiles=Mobile::where('Status','=',0)->paginate(1);
         //return view('retailer.registerDevices.blacklisted',compact('mobiles'));
       return view('users.blacklist',compact('mobiles'));
    }

      public function blacks1(){
      
        $mobiles=Mobile::where('Status','=',0)->paginate(1);
         //return view('retailer.registerDevices.blacklisted',compact('mobiles'));
       return view('user.blackList',compact('mobiles'));
    }

    public function reportsMobile($id){

         $complains = DB::table('ptarepoteds')
       ->join('mobiles', 'mobiles.id', '=', 'ptarepoteds.mobile_id')

       ->join('ptas', 'ptas.id', '=', 'ptarepoteds.pta_id')
       ->join('retailers', 'retailers.id', '=', 'ptarepoteds.retailer_id')
       ->select(['ptarepoteds.status','ptarepoteds.id', 'mobiles.MobileCode','ptas.Email'
           ,'retailers.cnic','ptarepoteds.created_at'])
       ->where('mobiles.user_id','=',$id)
       ->get();
        return view('users.reportedMobiles',compact('complains'));
    }


     
}
