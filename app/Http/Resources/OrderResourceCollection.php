<?php

namespace App\Http\Resources;

use http\Env\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class OrderResourceCollection extends ResourceCollection
{

    public function toArray(Request $request)
    {
        return [
            'data' => $this->collection,
        ];
    }
}
