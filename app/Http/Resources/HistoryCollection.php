<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class HistoryCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
                'id'=>$this->user->id,
                'name'=>$this->user->name,
                'email'=>$this->user->email,
                'userCnic'=>$this->user->cnic,
                'cell'=>$this->user->cell,
                'address'=>$this->user->address,
                'brand'=>$this->mobile->Brand,
                'status'=>$this->mobile->Status ==1 ? 'Valid' : 'Stolen' ,
                'retailerCnic'=>$this->user->retailer->cnic,
                ];
    }
}
