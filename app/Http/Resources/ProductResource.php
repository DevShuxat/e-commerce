<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Spatie\Translatable\HasTranslations;

class ProductResource extends JsonResource
{
    use HasTranslations;


    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->getTranslations('name'),
            'price' => $this->price,
            'description' => $this->getTranslations('description'),
            'category_id' => json_decode($this->category_id),
            'inventory' => StockResource::collection($this->stocks),
            'stocks' => $this->stocks,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

        ];
    }
}
