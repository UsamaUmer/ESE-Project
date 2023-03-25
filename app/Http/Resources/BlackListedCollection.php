<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class BlackListedCollection extends Resource
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
            'device' => $this->device->Type,
            'imei' => $this->MobileCode,
            'status' =>$this->Status == 1 ? 'Valid' : 'Stolen',
            'brand' => $this->Brand,
            'createdTime' =>$this->created_at->diffForHumans(),
            'updatedTime' =>$this->updated_at->diffForHumans(),


                ];
    }
}
