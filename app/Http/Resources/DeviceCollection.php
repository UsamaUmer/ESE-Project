<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class DeviceCollection extends Resource
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
          'id'        =>  $this->id,
          'imei'      =>  $this->MobileCode,
         
          'cnic'      =>  $this->user->cnic,
          'deviceId'  =>  $this->device->Type,
          'href'=>[
            'MobileDetail'    =>route('mobileDetail.show',$this->id),
        ]
      ];
  }
}
