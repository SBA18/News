<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;
use App\Channel;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        
        Channel::truncate();

        Channel::create([
            'name' => "CNN",
            'slug' => "CNN",
            'url' => "//www.ok.ru/videoembed/638990818968?nochat=1&autoplay=1",
        ]);
        Channel::create([
            'name' => "Fox News",
            'slug' => "FoxNews",
            'url' => "//www.ok.ru/videoembed/638990032536?nochat=1&autoplay=1",
        ]);
        Channel::create([
            'name' => "France 24 FR",
            'slug' => "France24FR",
            'url' => "https://www.youtube.com/embed/hL0sEdVJs3U?nochat=1&autoplay=1",
        ]);
        Channel::create([
            'name' => "France 24 EN",
            'slug' => "France24EN",
            'url' => "https://www.youtube.com/embed/J78SdCzzumA?nochat=1&autoplay=1",
        ]);
        Channel::create([
            'name' => "Al Jazeera EN",
            'slug' => "AlJazeeraEN",
            'url' => "https://www.youtube.com/embed/nVHt1_SWTZg?nochat=1&autoplay=1",
        ]);
    }
}
