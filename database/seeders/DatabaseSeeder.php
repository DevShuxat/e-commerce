<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\Category;
use App\Models\Product;
use App\Models\Value;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategorySeeder::class,
            RolePermissionSeeder::class,
            UserSeeder::class,
            AttributeSeeder::class,
            ValueSeeder::class,
            DeliveryMethodsSeeder::class,
            PaymentTypeSeeder::class,
            UserAddressSeeder::class,
            StatusSeeder::class,
            ProductTableSeeder::class,
            UserSettingSeeder::class,
            SettingSeeder::class,

        ]);
    }
}
