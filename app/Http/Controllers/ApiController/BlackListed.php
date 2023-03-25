<?php

namespace App\Http\Controllers\ApiController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Mobile;
use App\Http\Resources\BlackListedCollection;
use Symfony\Component\HttpFoundation\Response;
class BlackListed extends Controller
{
    
    public function index()
    {
         $blackListed=Mobile::all()->where('Status','=',0);
       if(!empty($blackListed)){

         return  BlackListedCollection::collection($blackListed,Response::HTTP_OK);

     }
     else{
        return response([
            "error"=> "No Record Not Found"        
        ],Response::HTTP_NOT_FOUND);
    }

}

  
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
