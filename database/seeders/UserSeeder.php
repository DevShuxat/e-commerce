<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::query()->create([
            'f_name' => 'Admin',
            'l_name' => 'admin',
            'email' => 'admin@gmail.com',
            'phone' => '+998934333333',
            'password' => Hash::make('admin@admin'),
        ]);

        $admin->role()->attach(1);


        User::factory()->count()->hasAttached(Role::find(2))->create();
    }
}
