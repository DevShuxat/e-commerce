<?php


namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    public function run()
    {
        Status::create([
            'name' => [
                'uz' => 'Yangi',
                'en' => 'Pending'
            ],
            'for' => 'Orders',
            'code' => 'P',
        ]);

        Status::create([
           'name' => [
               'uz' => 'Tolov kutilmoqda',
               'en' => 'Paying wait'
           ],
            'for' => 'Orders',
            'code'  => 'W'
        ]);

        Status::create([
            'name' =>
                [
                    'uz' => 'ishlanayapti',
                    'en' => 'Processing'
                ],

            'for' => 'Orders',
            'code' => 'PR',
            ]);

        Status::create([
            'name' => [
                'uz' => 'tayyor',
                'en' => 'Completed'],
            'for' => 'Orders',
            'code' => 'C'
        ]);
        // Add more status records here...


//        // Use the DB facade to insert the status records
//        foreach ($statuses as $status) {
//            DB::table('status')->insert($status);
//        }
    }
}
