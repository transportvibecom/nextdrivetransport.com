<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatisticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statistics')->insert([
            [
                'title' => 'Shipped vehicles',
                'quantity' => '1300',
            ],
            [
                'title' => 'Shipped heavy equipments',
                'quantity' => '120',
            ],
            [
                'title' => 'Years in Business',
                'quantity' => '10',
            ],
            [
                'title' => 'Regular Customers',
                'quantity' => '37',
            ]
        ]);
    }
}
