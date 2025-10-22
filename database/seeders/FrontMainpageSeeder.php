<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FrontMainpageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			DB::table('front_mainpages')
						->where('id',1)
						->update(['meta_title'=>'Title', 'meta_description'=>'Description','meta_h1'=>'H1']);
			}
    }
}
