<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => rand(1, 3),
            'name' => [
                'uz' => $this->faker->sentence(3),
                "ru" => 'Матрасы'
            ],
            'price' => rand(50000, 10000000),
            'description' => [
                "uz" => $this->faker->paragraph(5),
                "ru" => "Производство по немецким технологиям. Ассортимент на любой вкус. Гарантия 8 лет. Ортопедические. Пружинные и беспружинные. Анатомические. Аксессуары для сна. Шоу-рум матрасов. Модели: Анатамический, Ортопедический, Беспружинный.",

            ]
        ];
    }
}
