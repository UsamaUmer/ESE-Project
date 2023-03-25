<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Pta;
use DB;
class PtaController extends Controller
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
        $ptas=Pta::all();
       return view('admin.pta.AllInformation',compact('ptas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pta.pta');
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
          'Email'=>['unique:ptas'],
      ]);
        $pta=new Pta();
        $pta->Address=$request->Address;
        $pta->Phone=$request->Phone;
        $pta->Email=$request->Email;
        $pta->save();
        return redirect(route('pta.index'));
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
        $pta=Pta::find($id);
        return view('admin.pta.edit',compact('pta'));
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
        $pta=Pta::find($id);
        $pta->Address=$request->Address;
        $pta->Phone=$request->Phone;
        $pta->Email=$request->Email;
        $pta->save();
        return redirect(route('pta.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $done =DB::table('ptas')->where('id',$id)->update(['state'=>1]);
        if($done){
            return redirect()->back();
        }
    }
}
