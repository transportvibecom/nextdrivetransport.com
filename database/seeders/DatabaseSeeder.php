<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

//        $this->call(MainPageContentTableSeeder::class);
        $this->call(ServicesSeeder::class);
        $this->call(QuestionsSeeder::class);
        $this->call(StatisticSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(DestinationSeeder::class);
        $this->call(UserSeeder::class);
    }
}
