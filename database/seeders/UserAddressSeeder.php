<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserAddressSeeder extends Seeder
{

    public function run()
    {
        User::find(4)->addresses()->create([
            "latitude" => "41.310348",
            "longitude" => "69.282406",
            "region" => "Ташкент",
            "district" => "проспект Амира Темура",
            "street" => "Амира Темура",
            "home" => '12a'
        ]);
        User::find(4)->addresses()->create([
            "latitude" => "41.310348",
            "longitude" => "69.282406",
            "region" => "Ташкент",
            "district" => "Mirzo U",
            "street" => "Амира Темура",
            "home" => '12a'
        ]);
    }
}
