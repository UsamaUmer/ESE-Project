<?php

namespace App\Http\Controllers\Retailer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Model\Admin\Retailer;
use DB;
use Auth;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:retailer');
    }
    public function index()
    {
        $LoginRetailer= Auth::user()->id;
        $users=User::select('id','name','email','cnic','status')
        ->where([
                 ['status','=',1],
                 ['retailer_id','=',$LoginRetailer]
        ])->get();
        $mobiles=DB::table('mobiles')->select('user_id')->get();
        return view('retailer.users.AllUsers',compact('users','mobiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('retailer.users.user');
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

            'name'=>['required', 'string', 'max:255'],
            'retailer_id' => ['required'],
            'cnic'=>['unique:users'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],

        ]);

        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->cnic=$request->cnic;
        $user->address=$request->address;
        $user->cell=$request->cell;
        $user->password=bcrypt($request->password);
        $retailer=DB::table('retailers')->select('id','cnic')
        ->where('cnic',$request->retailer_id)->first();
        if ($retailer) {

            $user->retailer_id=$retailer->id;
             $user->save();
             return redirect(route('rel.index'))->with('msg','User Added Successfully'); 
        }else{

              return redirect(route('rel.index'))->with('msg','Retailor Cnic Does Not Match');    
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
        $user=User::find($id);
        $count=DB::table('mobiles')->select('user_id')->where('user_id','=',$user->id)->count('user_id');
        return view('retailer.users.show',compact('user','count'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::find($id);

        return view('retailer.users.edit',compact('user'));
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

            'name'=>['required', 'string', 'max:255'],
            'retailer_id' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:6'],

        ]);
        $user=User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->cnic=$request->cnic;
        $user->address=$request->address;
        $user->cell=$request->cell;
        $user->password=bcrypt($request->password);

        $retailer=DB::table('retailers')->select('id','cnic')
        ->where('cnic',$request->retailer_id)->first();
        if ($retailer) {

            $user->retailer_id=$retailer->id;
             $user->save();
             return redirect(route('rel.index')); 
        }else{

              return redirect(route('rel.index'))->with('msg','Retailor Cnic Does Not Match');    
        }

   

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //   //  User::where('id',$id)->delete();
    //    $done= DB::table('users')
    //         ->where('id', 1)
    //         ->update(['state' => 1]);
    //         if ($done) {
    //             return redirect()->back();
    //         }
        
    // }

    public function devicelesss()
    {
        $users=DB::table('users')
       ->select('id','name','cnic','email','cell','address','created_at','status')
       ->where([
                ['status','=',0],
                ['retailer_id','=',Auth::user()->id]
            ])->get();
       return view('retailer.users.deviceless',compact('users'));
    }
}
