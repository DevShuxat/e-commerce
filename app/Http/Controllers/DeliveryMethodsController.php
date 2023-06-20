<?php

namespace App\Http\Controllers;

use App\Http\Controllers\v1\Controller;
use App\Models\DeliveryMethod;
use App\Http\Requests\StoreDeliveryMethodsRequest;
use App\Http\Requests\UpdateDeliveryMethodsRequest;

class DeliveryMethodsController extends Controller
{

    public function index()
    {
        return  DeliveryMethod::all();
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
     * @param  \App\Models\DeliveryMethod  $deliveryMethods
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeliveryMethod $deliveryMethods)
    {
        //
    }
}
