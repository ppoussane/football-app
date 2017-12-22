<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Barcelona', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Real Madrid', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Valencia', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Atletico Madrid', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Sevilla', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Laliga', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Spain', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Other Sports', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Ronaldo', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Messi', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ]);
    }
}
