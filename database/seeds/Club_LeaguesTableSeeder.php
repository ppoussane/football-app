<?php

use Illuminate\Database\Seeder;
use carbon\carbon;

class Club_LeaguesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('club_leagues')->insert([
            ['club_id' => 1, 'league_id' => 1, 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['club_id' => 1, 'league_id' => 2, 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['club_id' => 1, 'league_id' => 3, 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['club_id' => 2, 'league_id' => 1, 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['club_id' => 2, 'league_id' => 3, 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['club_id' => 2, 'league_id' => 4, 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['club_id' => 3, 'league_id' => 1, 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
        ]);
    }
}
