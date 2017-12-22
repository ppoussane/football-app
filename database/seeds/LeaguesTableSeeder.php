<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class LeaguesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('leagues')->insert([
            ['name' => 'Laliga', 'image' => 'ImageLaliga', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Copa Del Rey', 'image' => 'ImageCopa del rey', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Champions League', 'image' => 'ImageChampions league', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Euro League', 'image' => 'ImageEuro league', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
        ]);
    }
}
