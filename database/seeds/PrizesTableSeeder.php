<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PrizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prizes')->insert([
            ['name' => 'Pichichi', 'image' => 'ImagePichichi', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Balon Dor' , 'image' => 'ImageBalon Dor', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Zamora', 'image' => 'ImageZamora', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
        ]);
    }
}
