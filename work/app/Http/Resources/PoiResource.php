<?php

namespace App\Http\Resources;

use App\Models\Rating;
use Illuminate\Http\Resources\Json\JsonResource;

class PoiResource extends JsonResource
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
            "id" => $this->id,
//            "location_id" => $this->location_id,
            "name" => $this->name,
            "image" => $this->image,
            "description" => $this->description,
            "gallery" => ImageResource::collection($this->images),
            "rating" => $this->ratings()->avg("rating"),
        ];
    }
}
