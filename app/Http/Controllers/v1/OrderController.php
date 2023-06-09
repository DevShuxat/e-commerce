<?php

namespace App\Http\Controllers\v1;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Http\Resources\OrderResource;
use App\Http\Resources\OrderResourceCollection;
use App\Models\Order;
use App\Models\Product;
use App\Models\UserAddress;

class OrderController extends Controller
{

    public function __construct()
    {


    }

    public function index()
    {
        return auth()->user()->orders;
    }

    public function show(Order $order)
    {
        return new OrderResource($order);
    }


    public function store(StoreOrderRequest $request)
    {
        $strOreder = [

        $sum = 100,
        $products = Product::query()->limit(2)->get(),
        $address = UserAddress::find($request->address_id),
//        dd($address);
//        dd($products);
        auth()->user()->orders()->create([
            'comment' => $request->comment,
            'delivery_method_id' => $request->delivery_method_id,
            'payment_type_id' => $request->payment_type_id,
            'address' => $address,
            'sum' => $sum,
            'products' => $products,
        ])
        ];

        return $this->respondWithResourceCollection(new OrderResourceCollection($strOreder), 'Physical all enrolls');
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
