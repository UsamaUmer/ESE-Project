<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Admin;
use DB;

class RemoveRole extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       //  $admin=Admin::find($request->role);
       // $admin->removeRole($request->role_id);

      //  Shop::find($id)->delete();
       // return $request->all();
      // $count=count($request->role_id);
        // for ($i=0; $i < $count ; $i++) { 
       //   }

       if(empty($request->role_id)){

        return redirect(route('check.create'))->with('msg','Role Selection Is Required ');

       }
       else{

        $confirm=DB::table('model_has_roles')
        ->where([
            ['model_id',$request->role],
            ['role_id','=',$request->role_id],
        ])->delete();
        if ($confirm) {
             return redirect(route('check.create'))->with('msg','Role Deleted Successfully');
        }

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
