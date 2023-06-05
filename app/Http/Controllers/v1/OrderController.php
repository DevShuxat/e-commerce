<?php

namespace App\Http\Controllers\v1;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Product;

class OrderController extends Controller
{

    public function __construct()
    {


    }

    public function index()
    {
        return auth()->user()->orders;
    }





    public function store(StoreOrderRequest $request)
    {

        $sum = 100;
        $products = Product::query()->limit(2)->get();
//        dd($products);
        auth()->user()->orders()->create([
            'comment' => $request->comment,
            'delivery_method_id' => $request->delivery_method_id,
            'payment_type_id' => $request->payment_type_id,
            'address_id' => $request->address_id,
            'sum' => $sum,
            'products' => $products,
        ]);

        return 'succes';
    }




    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }


    public function destroy(Order $order)
    {
        //
    }
}
