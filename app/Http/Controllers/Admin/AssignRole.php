<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use DB;
use App\Model\Admin\Admin;
class AssignRole extends Controller
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
     //  $admin=DB::table('admins')->select('id','cnic')->where('cnic','=','34202-8156991-9')->first();
       //  $user=Admin::find($admin->id);
    // return  $user->getRoleNames();
       //return $users=Admin::role('Super Admin')->get();
         // return Role::all()->where('model_id',$user->id);
      

      // Query for getting admin agianst a single model
       // $complains=DB::table('roles')
       //  ->join('model_has_roles','model_has_roles.role_id','=','roles.id')
       //  ->where('model_id','=',$admin->id)->get();
        
       

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $roles=Role::all();
         return view('admin.roles.assignRole',compact('roles'));
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
                    'role' => 'required',
                    
                     ]);
     $admin=DB::table('admins')->select('id','cnic')->where('cnic','=',$request->role)->first();
     if($admin){

        if(empty($request->role_id)){

            return redirect(route('assign.create'))->with('msg',' Role Is Required');
        }
        else{

            $yes=Admin::find($admin->id);

            $yes->assignRole($request->role_id);
    
            return redirect(route('assign.create'))->with('msg','Assigned Role Successfully');

        }
       
    }
    else{
         return redirect(route('assign.create'))->with('msg','Admin Cnic Is Wrong');
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
