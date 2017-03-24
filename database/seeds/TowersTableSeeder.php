<?php

use Illuminate\Database\Seeder;

class TowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('towers')->insert([
            'name' => str_random(10),
            'long1' => "58",
            'lat1' => "5",
            'long2' => "52",
            'lat2' => "5",
            'long3' => "52",
            'lat3' => "0",
            'long4' => "58",
            'lat4' => "0",
        ]);

        DB::table('towers')->insert([
            'name' => str_random(10),
            'long1' => "31",
            'lat1' => "0",
            'long2' => "40",
            'lat2' => "0",
            'long3' => "40",
            'lat3' => "4",
            'long4' => "31",
            'lat4' => "4",
        ]);
    }
}
