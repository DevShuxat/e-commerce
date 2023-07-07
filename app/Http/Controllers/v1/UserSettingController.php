<?php

namespace App\Http\Controllers\v1;

use App\Http\Resources\UserSettingResource;
use App\Models\Setting;
use App\Models\UserSetting;
use App\Http\Requests\StoreUserSettingRequest;
use App\Http\Requests\UpdateUserSettingRequest;


class UserSettingController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        if ($user) {
            $settings = $user->settings;
            if ($settings) {
                return $this->response(UserSettingResource::collection($settings));
            }
        }

        // Return response if user or settings are null
        return response()->json(['message' => 'User settings not found'], 404);
    }



    public function create()
    {
        //zzz
    }


    public function store( StoreUserSettingRequest $request)
    {
        if (auth()->user()->setting()->find($request->setting_id)->exists()){
            return $this->error('setting already exists');
        }
        $userSetting = auth()->user()->setting()->create([
           'setting_id' => $request->setting_id,
            'value_id' => $request->value_id ?? null,
            'switch' => $request->switch ?? null,
        ]);

        return $this->success('user setting created',$userSetting);

    }

    /**
     * Display the specified resource.
     */
    public function show(UserSetting $userSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserSetting $userSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserSettingRequest $request, UserSetting $userSetting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserSetting $userSetting)
    {
        //
    }
}
