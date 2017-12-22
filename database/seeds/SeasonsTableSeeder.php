<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SeasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seasons')->insert([
            ['name' => '2014-15', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => '2015-16', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => '2016-17', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => '2017-18', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
        ]);
    }
}
