<?php

//namespace App\Http\Resources;
//
//use App\Models\Attribute;
//use App\Models\Value;
//use Illuminate\Http\Resources\Json\JsonResource;
//
///**
// * @property mixed attributes
// */
//class StockResource extends JsonResource
//{
//
//
//    public function toArray($request): array
//    {
//        $result = [
//            'quantity' => $this->quantity,
////            'color' => 'red',
////            'material' => 'MDF'
//        ];
//
//
//        $attributes = json_encode($this->attributes);
//        foreach ($attributes as $stockAttribute) {
//            $attribute = Attribute::find($stockAttribute->attribute_id);
//            $value = Value::find($stockAttribute->value_id);
//
//            $result = $attribute->name = $value->getTranslations('name', 'descriptions');
//        }
//
//        return $result;
//    }
//}
