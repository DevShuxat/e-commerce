<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\v1\Controller;
use App\Http\Requests\StoreUserAddressRequest;
use App\Http\Requests\UpdateUserAddressRequest;
use App\Models\UserAddress;

class UserAddressController extends Controller
{

    public function index()
    {
       $addresses =  auth()->user()->addresses;
       return $this->success('this is  user addresses',$addresses);
    }


    public function store(StoreUserAddressRequest $request)
    {
        $createAddress = auth()->user()->addresses()->create($request->toArray());
        return $this->success('Create address is successfullly',$createAddress);
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
