<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\v1\Controller;
use App\Models\DeliveryMethod;
use App\Http\Requests\StoreDeliveryMethodsRequest;
use App\Http\Requests\UpdateDeliveryMethodsRequest;
use Illuminate\Http\Response;

class DeliveryMethodsController extends Controller
{

    public function index()
    {
        $delivery = DeliveryMethod::all();

        return $this->success('this is all delivery methods', [$delivery]);
    }


    public function store(StoreDeliveryMethodsRequest $request)
    {
        //
    }


    public function update(UpdateDeliveryMethodsRequest $request, DeliveryMethod $deliveryMethods)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DeliveryMethod $deliveryMethods
     * @return Response
     */
    public function destroy(DeliveryMethod $deliveryMethods)
    {
        //
    }
}
