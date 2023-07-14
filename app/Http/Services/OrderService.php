<?php

namespace App\Http\Services;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Resources\OrderResource;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Models\Stock;
use App\Models\UserAddress;



class OrderService
{
    public function index(array $all)
    {
        if (request()->has('status_id')) {
            return $this->response(OrderResource::collection(
                auth()->user()->orders()->where('status_id', request('status_id'))->paginate(10)
            ));
        }
        return auth()->user()->orders;

    }


//    public function create(StoreOrderRequest $request)
//    {
//        $sum = 0;
//        $products = [];
//        $notFoundProducts = [];
//        $address = UserAddress::find($request->address_id);
//
//        foreach ($request['products'] as $requestProduct) {
//            $product = Product::with('stocks')->findOrFail($requestProduct['product_id']);
//            $product->quantity = $requestProduct['quantity'];
//
//            if (
//                $product->stocks()->find($requestProduct['stock_id']) &&
//                $product->stocks()->find($requestProduct['stock_id'])->quantity >= $requestProduct['quantity']
//            ) {
//                $productWithStock = $product->withStock($requestProduct['stock_id']);
//                $productResource = new ProductResource($productWithStock);
//
//                $sum += $productResource['price'];
//                $productArray = $productResource->resolve();
//                $productArray['order_quantity'] = $requestProduct['quantity']; // Add 'order_quantity' key
//                $products[] = $productArray;
//            } else {
//                $requestProduct['we_have'] = $product->stocks()->find($requestProduct['stock_id'])->quantity;
////                dd($requestProduct);
//                $notFoundProducts[] = $requestProduct;
//            }
//        }
//
//        if ($notFoundProducts === [] && $products !== [] && $sum !== 0) {
//            $order = auth()->user()->orders()->create([
//                'comment' => $request->comment,
//                'delivery_method_id' => $request->delivery_method_id,
//                'payment_type_id' => $request->payment_type_id,
//                'sum' => $sum,
//                'status_id' => in_array($request['payment_type_id'], [1, 2]) ? 1 : 3,
//                'address' => $address,
//                'products' => $products,
//            ]);
//
//
//            if ($order) {
//                foreach ($products as $product) {
//                    $stock = Stock::find($product['inventory'][0]['id']);
//                    $stock->quantity -= $product['order_quantity'];
//                    $stock->save();
//                }
//            }
//            return $this->success('order created', [$order]);
//        } else {
//            return $this->error(
//                'some products not found or does not have in inventory',
//                ['not_found_products' => $notFoundProducts]
//            );
//        }
//    }
}
