<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\v1\Controller;
use App\Models\UserCard;
use App\Http\Requests\StoreUserCardRequest;
use App\Http\Requests\UpdateUserCardRequest;

class UserCardController extends Controller
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
     * @param  \App\Http\Requests\StoreUserCardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserCardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserCard  $userCard
     * @return \Illuminate\Http\Response
     */
    public function show(UserCard $userCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserCard  $userCard
     * @return \Illuminate\Http\Response
     */
    public function edit(UserCard $userCard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserCardRequest  $request
     * @param  \App\Models\UserCard  $userCard
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserCardRequest $request, UserCard $userCard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserCard  $userCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserCard $userCard)
    {
        //
    }
}
