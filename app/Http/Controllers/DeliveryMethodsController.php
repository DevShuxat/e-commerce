<?php

namespace App\Http\Controllers;

use App\Models\DeliveryMethod;
use App\Http\Requests\StoreDeliveryMethodsRequest;
use App\Http\Requests\UpdateDeliveryMethodsRequest;

class DeliveryMethodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDeliveryMethodsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDeliveryMethodsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DeliveryMethod  $deliveryMethods
     * @return \Illuminate\Http\Response
     */
    public function show(DeliveryMethod $deliveryMethods)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DeliveryMethod  $deliveryMethods
     * @return \Illuminate\Http\Response
     */
    public function edit(DeliveryMethod $deliveryMethods)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDeliveryMethodsRequest  $request
     * @param  \App\Models\DeliveryMethod  $deliveryMethods
     * @return \Illuminate\Http\Response
     */
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
