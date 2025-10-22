<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'question' => 'Is Broadway Auto Transport is legit?	',
            'answer' => 'We have 24/7 customer support service, so you can be calm with your doubts, so if you have any questions, just call us and be free to ask your questions. Our professional customer support team are available for you around the clock, 365 days a year, to ensure our services are best option for you!',
        ]);
    }
}
