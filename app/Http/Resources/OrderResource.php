<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'comment' => $this->comment,
            'sum' => $this->sum,
            'user'  => $this->user,
            'status' => $this->status,
            'products' => $this->products,
            'address' => $this->address,
            'payment_type_id' => $this->payment_type_id,
            'delivery_method_id' => $this->delivery_method_id,
        ];
    }
}
