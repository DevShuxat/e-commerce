<?php

namespace App\Http\Controllers\v1;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{

    public function index()
    {
        $products =  Product::all();
        return $this->success('All products', [$products]);

    }


    public function store(StoreProductRequest $request)
    {
        //
    }


    public function show($id)
    {
        $productById =  Product::with('stocks')->find($id);
        return $this->success('this product by id' ,[$productById]);
    }



    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }


    public function destroy(Product $product)
    {
        //
    }
}
