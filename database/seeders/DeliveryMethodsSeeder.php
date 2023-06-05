<?php

namespace Database\Seeders;

use App\Models\DeliveryMethod;
use Illuminate\Database\Seeder;

class DeliveryMethodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeliveryMethod::create([
           'name' => [
               'uz' => 'Tekin',
               'en' => 'Free'
           ],
            'estimated_time' => [
                'uz' => '5kun',
                'en' => 'ru 2kun'
            ],
            'sum' => 0,

        ]);
        DeliveryMethod::create([
           'name' => [
               'uz' => 'Standart',
               'en' => 'standart'
           ],
            'estimated_time' => [
                'uz' => '3kun',
                'en' => 'ru 2kun'
            ],
            'sum' => 5,

        ]);
        DeliveryMethod::create([
           'name' => [
               'uz' => 'tez',
               'en' => 'tezru'
           ],
            'estimated_time' => [
                'uz' => '1kun',
                'en' => 'ru 2kun'
            ],
            'sum' => 8,

        ]);
    }
}
