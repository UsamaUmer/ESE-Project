<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ProfileResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
          'id' =>$this->id,
          'name' => $this->name,
          'email' =>$this->email,
          'cnic' =>$this->cnic,
          'cell' =>$this->cell,
          'address' =>$this->address,
          
       
      ];
  }
}
