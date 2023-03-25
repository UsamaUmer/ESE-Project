<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class MobileResource extends Resource
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
           'id'        =>  $this->id,
           'imei'      =>  $this->MobileCode,
           'status'    =>  $this->Status ==1 ? 'Valid' : 'Stolen',
           'brand'     =>  $this->Brand,
           'recapture' =>  $this->Recapture,
           'ownership' =>  $this->Ownership,
           'userCnic'      =>  $this->user->cnic,
          'deviceId'  =>  $this->device->Type,
          'retailerCnic' => $this->retailer->cnic,
          'href' =>[
            'History' =>route('MobileHistory.show',$this->id)
                    ]
       ];
   }
}
