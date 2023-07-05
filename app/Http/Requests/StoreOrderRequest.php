<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property mixed address_id
 */
class StoreOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }


    public function rules(): array
    {
        return [
            "delivery_method_id" => 'required|numeric',
            'payment_type_id' => 'required|numeric',
            'address'=>'string',
            'products' => 'required',
            'products.*.product_id' => 'required|numeric',
            'products.*.stock_id' => 'nullable|numeric',
            'products.*.quantity' => 'required|numeric',
            'comment' => 'string|max:500',
        ];
    }
}
