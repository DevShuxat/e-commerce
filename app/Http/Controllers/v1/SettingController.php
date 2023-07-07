<?php

namespace App\Http\Controllers\v1;

use App\Http\Resources\SettingResourse;
use App\Models\Setting;
use App\Http\Requests\StoreSettingRequest;
use App\Http\Requests\UpdateSettingRequest;


class SettingController extends Controller
{

    public function index()
    {
        $user = auth()->user();
            $settings = $user->setting;
//            dd($settings);
            if ($settings) {
                return $this->response(SettingResourse::collection($settings));
            }

        return response()->json(['message' => 'Settings not found'], 404);
    }
    public function create()
    {
        //
    }
    public function store(StoreSettingRequest $request)
    {
        //
    }
    public function show(Setting $setting)
    {
        //
    }
    public function destroy(Setting $setting)
    {
        //
    }
}
