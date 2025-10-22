<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            'title' => 'We Are Here to Make Car Shipping Easy for You!',
            'slug' => 'asd_ads',
            'shortDesc' => 'There may be various reasons to ship a car across country.',
            'desc' => 'Motorcycle enthusiasts understand the thrill and freedom that comes with riding their prized machines. However, there may be times when circumstances require them to transport their motorcycles across states. Whether you’re relocating, purchasing a motorcycle online, or attending a rally in a different state, finding a reliable and affordable motorcycle shipping service is crucial. That’s where Broadway Auto Transport comes in! With our commitment to exceptional service, advanced logistics, and competitive pricing, we aim to make motorcycle shipping across states convenient and cost-effective for you.',
            'thumbnail' => '',
            'created_at' => date('Y-m-d H:m:s'),
        ]);
    }
}
