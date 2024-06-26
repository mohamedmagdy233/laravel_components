<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TireResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name'=>$this->name,
            'price'=>$this->price,
            'quantity'=>$this->quantity,
            'user_id'=>$this->user_id,
            'image'=>$this->image

        ];
    }
}
