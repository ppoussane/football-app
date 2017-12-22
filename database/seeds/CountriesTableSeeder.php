<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            ['name' => 'Spain', 'image' => 'ImageSpain', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Portugal', 'image' => 'ImagePortugal', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Argentina', 'image' => 'ImageArgentina', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Germany', 'image' => 'ImageGermany', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'France', 'image' => 'ImageFrance', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
        ]);
    }
}
