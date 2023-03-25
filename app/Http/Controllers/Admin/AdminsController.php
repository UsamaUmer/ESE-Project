<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Admin;
use App\Model\Admin\Shop;
use DB;
class AdminsController extends Controller
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
        $admins=DB::table('admins')->select('id','Name','Cnic','state')->where('state',0)->get();
        
        return view('admin.admins.Alladmins',compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.admins.admin');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function validations($request){
                                              //custom Messages pass this varible to validate function
           // $messages=[
           //  'unique'=>'This : attribute is alredy taken'
           //           ];
     $this->validate($request,[

        'Name'=>'required',
        'Cnic'=>'required|unique:admins',
        'Cell'=>'required',
        'password'=>['required','confirmed','min:6'],
        'Email'=>'required',
        'Address'=>'required'

    ]);
 }

 public function validations1($request){

     $this->validate($request,[

        'Name'=>'required',
        'Cnic'=>'required',
        'Cell'=>'required',
        'password'=>['required','min:6'],
        'Email'=>'required',
        'Address'=>'required'

    ]);
 }

 public function fields($admin,$request){

    $admin->Name=$request->Name;
    $admin->Cnic=$request->Cnic;
    $admin->Address=$request->Address;
    $admin->Cell=$request->Cell;
    $admin->Email=$request->Email;
    $admin->password=bcrypt($request->password);

    $admin->save();
}

public function store(Request $request)
{

    $this->validations($request);

    $admin=new Admin();

    $this->fields($admin,$request);

    return redirect(route('admin.index'))->with('msg','Admin Added Successfully');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin=Admin::where('id',$id)->first();
        return view('admin.admins.show',compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin=Admin::where('id',$id)->first();
        return view('admin.admins.edit',compact('admin'));

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


        $this->validations1($request);


        $admin=Admin::find($id);

        $this->fields($admin,$request);

        return redirect(route('admin.index'))->with('msg','Admin Record Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //  Admin::where('id',$id)->delete();
        $done =DB::table('admins')->where('id',$id)->update(['state'=>1]);
        if($done){
            return redirect()->back();
        }
    }

    public function AllShops($id){

     $shops=Shop::all()->where('admin_id',$id);
     return view('admin.admins.AllShopsBySingleAdmin',compact('shops'));
 }
}
