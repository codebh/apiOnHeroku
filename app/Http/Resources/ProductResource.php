<?php

namespace App\Http\Resources;

use App\Image;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'product_id'=>$this->id,
            'product_title'=>$this->title,
            'product_description'=>$this->description,
            'product_price'=>number_format($this->price,2),
            'product_total'=>number_format($this->total,2),
            'product_discount'=>number_format($this->discount,2),
            'product_category'=> new CategoryResource($this->category),
            'product_tags'=>TagResource::collection($this->tags),
            'product_images'=>ImageResource::collection($this->images)

//            'product_discount'=>$this->discount,

        ];
    }
}
