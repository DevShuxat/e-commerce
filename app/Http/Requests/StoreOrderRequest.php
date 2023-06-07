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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'comment' => 'string|max:500',
            "delivery_method_id" => 'required|numeric',
            'payment_type_id' => 'required|numeric',
            'products' => 'required',
            'address'=>'string',
            'products.*.product_id' => 'required|numeric',
            'products.*.stock_id' => 'nullable|numeric',
            'products.*.quantity' => 'required|numeric',
        ];
    }
}
