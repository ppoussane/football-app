<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cups')->insert([
            ['name' => 'Laliga', 'image' => 'ImageLaliga', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Copa Del Rey', 'image' => 'ImageCopa Del Rey', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Champions League', 'image' => 'ImageChampions League', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ]);
    }
}
