<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'title' => 'Car Shipping Service',
                'slug' => '123',
                'shortDesc' => 'There may be various reasons to ship a car across country. Whether you are relocating to another state',
                'desc' => '3 most essential inside you should know about motorcycle shipping',
                'meta_title' => 'meta_title',
                'meta_description' => 'meta_description',
                'meta_h1' => 'meta_h1',
                'descOne' => 'Price. The price of quote should be $0.5 to $1.4 per mile. The price, some companies are offering for shipping can be so cheap and this can attract some customers, but often it is not the last price, they will try to increase it. Avoid these types of scammers!',
                'descTwo' => 'Safety. When you are shipping your motorcycle, it requires specific loading and unloading procedures and equipment to ensure safety and damage-free delivery. Inexperience in loading and strapping down motorcycles can lead to serious issues, such as body damage, and even total damage.',
                'descThree' => 'Price. The price of quote should be $0.5 to $1.4 per mile. The price, some companies are offering for shipping can be so cheap and this can attract some customers, but often it is not the last price, they will try to increase it. Avoid these types of scammers!',
                'factTitle' => 'When it comes to factors to determine price of quote, we provided below:',
                'factOne' => 'Distance',
                'factTwo' => 'Exact pick-up and delivery locations',
                'factThree' => 'The model of motorcycle',
                'factFour' => 'Type of motorcycle shipping trailer: enclosed or open',
                'thumbnail' => '',
            ],
            [
                'title' => 'Car Shipping Service 2',
                'slug' => '1232',
                'shortDesc' => 'There may be various reasons to ship a car across country. Whether you are relocating to another state',
                'desc' => '3 most essential inside you should know about motorcycle shipping',
                'meta_title' => 'meta_title',
                'meta_description' => 'meta_description',
                'meta_h1' => 'meta_h1',
                'descOne' => 'Price. The price of quote should be $0.5 to $1.4 per mile. The price, some companies are offering for shipping can be so cheap and this can attract some customers, but often it is not the last price, they will try to increase it. Avoid these types of scammers!',
                'descTwo' => 'Safety. When you are shipping your motorcycle, it requires specific loading and unloading procedures and equipment to ensure safety and damage-free delivery. Inexperience in loading and strapping down motorcycles can lead to serious issues, such as body damage, and even total damage.',
                'descThree' => 'Price. The price of quote should be $0.5 to $1.4 per mile. The price, some companies are offering for shipping can be so cheap and this can attract some customers, but often it is not the last price, they will try to increase it. Avoid these types of scammers!',
                'factTitle' => 'When it comes to factors to determine price of quote, we provided below:',
                'factOne' => 'Distance',
                'factTwo' => 'Exact pick-up and delivery locations',
                'factThree' => 'The model of motorcycle',
                'factFour' => 'Type of motorcycle shipping trailer: enclosed or open',
                'thumbnail' => '',
            ],
            [
                'title' => 'Car Shipping Service 3',
                'slug' => '1233',
                'meta_title' => 'meta_title',
                'meta_description' => 'meta_description',
                'meta_h1' => 'meta_h1',
                'shortDesc' => 'There may be various reasons to ship a car across country. Whether you are relocating to another state',
                'desc' => '3 most essential inside you should know about motorcycle shipping',
                'descOne' => 'Price. The price of quote should be $0.5 to $1.4 per mile. The price, some companies are offering for shipping can be so cheap and this can attract some customers, but often it is not the last price, they will try to increase it. Avoid these types of scammers!',
                'descTwo' => 'Safety. When you are shipping your motorcycle, it requires specific loading and unloading procedures and equipment to ensure safety and damage-free delivery. Inexperience in loading and strapping down motorcycles can lead to serious issues, such as body damage, and even total damage.',
                'descThree' => 'Price. The price of quote should be $0.5 to $1.4 per mile. The price, some companies are offering for shipping can be so cheap and this can attract some customers, but often it is not the last price, they will try to increase it. Avoid these types of scammers!',
                'factTitle' => 'When it comes to factors to determine price of quote, we provided below:',
                'factOne' => 'Distance',
                'factTwo' => 'Exact pick-up and delivery locations',
                'factThree' => 'The model of motorcycle',
                'factFour' => 'Type of motorcycle shipping trailer: enclosed or open',
                'thumbnail' => '',
            ]
        ]);
    }
}
