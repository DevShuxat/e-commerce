<?php

namespace App\Http\Controllers\v1;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Http\Resources\OrderResource;
use App\Models\Order;
use App\Models\PaymentType;
use App\Models\Product;
use App\Models\UserAddress;
use Illuminate\Http\Request;


class   OrderController extends Controller
{

    public function index()
    {
        return auth()->user()->orders;
    }

    public function show(Order $order)
    {
        return new OrderResource($order);
    }


    public function store(Request $request)
    {

        $sum = 100;
        $products = Product::query()->limit(2)->get();
        $address = UserAddress::find($request->address_id);
        $payment = PaymentType::find($request->payment_type_id);


        auth()->user()->orders()->create([
            'comment' => $request->comment,
            'delivery_method_id' => $request->delivery_method_id,
            'payment_type_id' => $payment,
            'address' => $address,
            'sum' => $sum,
            'products' => $products,
        ]);

        return (['message' => 'Create order is success']);
    }

    public function update(UpdateOrderRequest $request, $id)
    {
        // Get the order from the database
        $order = Order::find($id);

        // Update the order in the database
        $order->delivery_method_id = $request->input('delivery_method_id');
        $order->payment_type_id = $request->input('payment_type_id');
        $order->address = $request->input('address');
        $order->sum = $request->input('sum');
        $order->save();

        // Update the order items in the database
        foreach ($request->input('products') as $product) {
            $item = $order->items()->where('product_id', $product['id'])->first();
            if ($item) {
                $item->quantity = $product['quantity'];
                $item->price = $product['price'];
                $item->save();
            }
        }

        // Return the updated order
        return $order;
    }


    public function destroy(Order $order)
    {
        //
    }
}
