<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class StadiaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stadia')->insert([
            ['name' => 'Camp Nou', 'capacity' => '90000', 'city' => 'Barcelona', 'image' => 'ImageCamp Nou', 'club_id' => 1, 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Santiago Bernabeo', 'capacity' => '85000', 'city' => 'Madrid', 'image' => 'ImageSantiago', 'club_id' => 2, 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Mestalla', 'capacity' => '70000', 'city' => 'Sevilla', 'image' => 'ImageMestalla', 'club_id' => 3, 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Wanda', 'capacity' => '80000', 'city' => 'Madrid', 'image' => 'ImageWanda', 'club_id' => 4, 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ]);
    }
}
