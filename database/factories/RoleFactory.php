<?php

namespace Database\Factories;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        Role::query()->create([
            'name' => 'admin'
        ]);

        Role::query()->create([
            'name' => 'customer'
        ]);
        Role::query()->create([
            'name' => 'shop_manager'
        ]);
    }
}
