<?php

namespace Database\Seeders;

use App\Enums\SettingType;
use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Http\Resources\Json\JsonResource;
use Symfony\Component\HttpFoundation\JsonResponse;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): JsonResponse
    {
        $setting = Setting::create([
            'name' => [
                'uz' => 'Til',
                'ru' => 'Language'
            ],
            'type' => SettingType::SELECT,
        ]);

        $setting->values()->create([
            'name' => [
                'uz' => 'Ozbekcha',
                'ru' => 'Ozbekcha',
            ]
        ]);
        $setting->values()->create([
            'name' => [
                'uz' => 'Ruscha',
                'ru' => 'Ruscha',
            ]
        ]);

        $setting = Setting::create([
            'name' => [
                'uz' => 'Pul birligi',
                'ru' => 'Pul birligi'
            ],
            'type' => SettingType::SELECT,
        ]);
        $setting->values()->create([
            [
                'name' => [
                    'uz' => 'So\'m',
                    'ru' => 'Sum',
                ]
            ],
            [
                'name' => [
                    'uz' => 'Dollar',
                    'ru' => 'Dollar',
                ]
            ]
        ]);

        $setting = Setting::create([
            'name' => [
                'uz' => 'Dark Mode',
                'ru' => 'Dark Mode ru'
            ],
            'type' => SettingType::SWITCH,
        ]);

        $setting = Setting::create([
            'name' => [
                'uz' => 'Xabarnomalar',
                'ru' => 'Xabarnomalar ru'
            ],
            'type' => SettingType::SWITCH,
        ]);
        $settingResource = new JsonResource($setting);

        // Return the transformed JSON response
        return $settingResource->response();
    }


}
