<?php

namespace Database\Seeders;

use App\Models\PaymentType;
use Illuminate\Database\Seeder;

class PaymentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentType::create([
            'name' => [
                'uz' => 'Naqd',
                'ru' => 'Naqd'

            ],
        ]);
        PaymentType::create([
            'name' => [
                'uz' => 'click',
                'ru' => 'Naqd'

            ],
        ]);
        PaymentType::create([
            'name' => [
                'uz' => 'payme',
                'ru' => 'Naqd'

            ],

        ]);
    }
}
