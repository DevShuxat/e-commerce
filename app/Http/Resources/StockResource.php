<?php

namespace App\Http\Resources;

use App\Models\Attribute;
use App\Models\Value;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed attributes
 */
class StockResource extends JsonResource
{
    public function toArray($request): array
    {
        $result = [
            'quantity' => $this->quantity,
            'attributes' => []
        ];

        $attributes = json_decode($this->attributes, true); // Decode JSON to an array
        foreach ($attributes as $stockAttribute) {
            $attribute = Attribute::find($stockAttribute['attribute_id']);
            $value = Value::find($stockAttribute['value_id']);

            if ($attribute && $value) {
                $result['attributes'][] = [
                    'attribute' => $attribute->name,
                ];
            }
        }

        return $result;
    }
}


