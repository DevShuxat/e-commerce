<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Value::create([
           "attribute_id"=> 1,
                "value"=>[
                "uz" => "Qizil",
                "ru"=> "Красный",
            ]
        ]);
        Value::create([
            "attribute_id"=> 1,
            "value"=>[
                "uz" => "Qora",
                "ru"=> "Черный",
            ]
        ]);
        Value::create([
            "attribute_id"=> 1,
            "value"=>[
                "uz" => "Oq",
                "ru"=> "Белый",
            ]
        ]);

        Value::create([
            "attribute_id" => 2,
            'value' => [
                'uz' => 'MDF',
                'ru' => 'МДФ'
            ],
        ]);
        Value::create([
            "attribute_id" => 2,
            'value' => [
                'uz' => 'LDSP',
                'ru' => 'ЛДСП'
            ],
        ]);
//        Value::create([
//            "attribute_id"=> 3,
//            "name"=> 'M'
//        ]);
//        Value::create([
//            "attribute_id"=> 3,
//            "name"=> 'S'
//        ]);
//        Value::create([
//            "attribute_id"=> 3,
//            "name"=> 'L'
//        ]);
    }
}
