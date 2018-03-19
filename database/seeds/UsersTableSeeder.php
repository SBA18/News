<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        
        User::truncate();

        User::create([
            'name' => "CNN",
            'email' => "sawers@saw.com",
            'password' => bcrypt('secret'),
        ]);
    }
}
