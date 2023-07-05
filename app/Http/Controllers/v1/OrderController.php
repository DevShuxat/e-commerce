<?php

namespace App\Http\Controllers\v1;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Http\Resources\OrderResource;
use App\Http\Resources\ProductResource;
use App\Models\Order;

//use App\Models\PaymentType;
use App\Models\Product;
use App\Models\Stock;
use App\Models\UserAddress;

//use Illuminate\Http\Request;


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


    public function store(StoreOrderRequest $request)
    {
        $sum = 0;
        $products = [];
        $notFoundProducts = [];
        $address = UserAddress::find($request->address_id);

        foreach ($request['products'] as $requestProduct) {
            $product = Product::with('stocks')->findOrFail($requestProduct['product_id']);
            $product->quantity = $requestProduct['quantity'];

            if (
                $product->stocks()->find($requestProduct['stock_id']) &&
                $product->stocks()->find($requestProduct['stock_id'])->quantity >= $requestProduct['quantity']
            ) {
                $productWithStock = $product->withStock($requestProduct['stock_id']);
                $productResource = new ProductResource($productWithStock);

                $sum += $productResource['price'];
                $productArray = $productResource->resolve();
                $productArray['order_quantity'] = $requestProduct['quantity']; // Add 'order_quantity' key
                $products[] = $productArray;
            } else {
                $requestProduct['we_have'] = $product->stocks()->find($requestProduct['stock_id'])->quantity;
                $notFoundProducts[] = $requestProduct;
            }
        }

        if ($notFoundProducts === [] && $products !== [] && $sum !== 0) {
            $order = auth()->user()->orders()->create([
                'comment' => $request->comment,
                'delivery_method_id' => $request->delivery_method_id,
                'payment_type_id' => $request->payment_type_id,
                'sum' => $sum,
                'status_id' => in_array($request['payment_type_id'], [1, 2]) ? 1 : 3,
                'address' => $address,
                'products' => $products,
            ]);


            if ($order) {
                foreach ($products as $product) {
                    $stock = Stock::find($product['inventory'][0]['id']);
                    $stock->quantity -= $product['order_quantity'];
                    $stock->save();
                }
            }

            return $this->success('order created', $order);
        } else {
            return $this->error(
                'some products not found or do not have in inventory',
                ['not_found_products' => $notFoundProducts]
            );
        }

        // return 'something went wrong, cant create order';
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
