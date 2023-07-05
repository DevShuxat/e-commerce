<?php

namespace App\Http\Controllers\v1;

use App\Http\Requests\StoreReviewRequest;
use App\Http\Resources\ReviewResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductReviewController extends Controller
{


    public function index(Product $product)
    {
        $productReviewIndex = ([
            'overall_rating' => $product->reviews()->average('rating'),
            'reviews_count' => $product->reviews()->count(),
            'reviews' => ReviewResource::collection($product->reviews()->paginate(15))
        ]);

        return $this->success('this product reviews', ['data' => $productReviewIndex]);
    }
    public function store(Product $product,StoreReviewRequest $request)
    {

        $product->reviews()->create([
            'user_id'=> auth()->id(),
            'rating' => $request->rating,
            'body' => $request->body,
        ]);

        return $this->success('review created', ['data' => $product]);
    }
}
