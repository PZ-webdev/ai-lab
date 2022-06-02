<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TripResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'continent' => $this->continent,
            'period' => $this->period,
            'description' => $this->description,
            'price' => $this->price,
            'country_id' => $this->country_id,
            //'created_at' => $this->created_at,
            //'updated_at' => $this->updated_at,
            //'country' => $this->country,
        ];
    }
}
