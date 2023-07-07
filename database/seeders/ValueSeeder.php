<?php

namespace Database\Seeders;

use App\Models\Attribute;
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
        $attribute = Attribute::find(1);

        $attribute->values()->create([
                "value"=>[
                "uz" => "Qizil",
                "ru"=> "Красный",
            ]
        ]);
        $attribute->values()->create([
            "value"=>[
                "uz" => "Qora",
                "ru"=> "Черный",
            ]
        ]);
        $attribute->values()->create([
            "value"=>[
                "uz" => "Oq",
                "ru"=> "Белый",
            ]
        ]);

        $attribute->values()->create([
            'value' => [
                'uz' => 'MDF',
                'ru' => 'МДФ'
            ],
        ]);
        $attribute->values()->create([
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
