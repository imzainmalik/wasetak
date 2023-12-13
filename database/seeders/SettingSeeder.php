<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Setting::create([
            
            'web_name' => 'Wasetak',
            'web_logo' => 'assets/images/logo.png',
            'web_slogan' => '',
            'log_fav_icon' => 'assets/images/favicon.png',
            'web_email' =>   'example@example.com',
            'web_address' =>  'Address',
            'web_phone' => '123456789',
            'facebook_link' => '',
            'insta_link' => '',
            'twitter_link' => '',
            'youtube_link' => '',
            'created_at' => Carbon::now()->format('Y-m-d'),
            'updated_at' => Carbon::now()->format('Y-m-d'),
	

        ]);


    }
}
