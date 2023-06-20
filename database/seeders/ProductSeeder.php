<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::all();
        $users = User::all();

        foreach ($products as $product) {
            $randomUserIds = $users->random(50)->pluck('id')->toArray();
            $product->users()->attach($randomUserIds);
        }
    }
}
