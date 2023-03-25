<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Model\Admin\Admin;
class CheckRole extends Controller
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
       return view('admin.roles.checkRoles');
   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $admin=DB::table('admins')->select('id','cnic')
        ->where('cnic','=',$request->role)->first();

        if ($admin) {


            $complains=DB::table('roles')
            ->join('model_has_roles','model_has_roles.role_id','=','roles.id')
            ->where('model_id','=',$admin->id)->get();
            if($complains==true){
                if($complains->count()>0){
                    $a=$admin->id;
                    return view('admin.roles.getRoles',compact(['complains','a']));


               }
                 else{
                       $a='';
                       return redirect(route('check.create'))->with('msg','Roles Not Assigned yet');
                   }
           }



       }

       else {
        return redirect(route('check.create'))->with('msg','Admin Cnic Is Wrong');
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

    public function destroy($id)
    {
        //
    }




}
