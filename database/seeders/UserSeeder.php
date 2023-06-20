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
        $admin = User::updateOrCreate(
            [
                'email' => "admin@ecom.uz",
                'first_name' => "admin",
                'last_name' => "admin",
                'phone' => '+99999999',
                'password' => Hash::make('password'),
            ]);
        $admin->roles()->attach(1);


        $manager = User::updateOrCreate([
            'first_name' => "manager",
            "last_name" => 'manager',
            'email' => "manager@ecom.uz",
            "phone" => "+33333333",
            "password" => Hash::make('manager')
        ]);

        $manager->roles()->attach(3);

        User::factory()->count(10)->hasAttached([Role::find(2)])->create();
    }
}
