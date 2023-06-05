<?php

namespace App\Http\Controllers;

use App\Http\Controllers\v1\Controller;
use App\Models\UserAddress;
use App\Http\Requests\StoreUserAddressRequest;
use App\Http\Requests\UpdateUserAddressRequest;
use Ramsey\Collection\Collection;

class UserAddressController extends Controller
{

    public function index()
    {
        return  auth()->user()->addresses;
    }




    public function store(StoreUserAddressRequest $request)
    {
        auth()->user()->addresses()->create($request->toArray());
        return true;
    }


    public function show(UserAddress $userAddress)
    {
        //
    }


    public function edit(UserAddress $userAddress)
    {
        //
    }


    public function update(UpdateUserAddressRequest $request, UserAddress $userAddress)
    {
        //
    }


    public function destroy(UserAddress $userAddress)
    {
        //
    }
}
