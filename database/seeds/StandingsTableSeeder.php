<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class StandingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('standings')->insert([
            ['club_id' => 1, 'level' => 1, 'game' => 13, 'win' => 12, 'lose' => 0, 'draw' => 1, 'goal_f' => 34, 'goal_c' => 4,
                'point' => 37, 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['club_id' => 2, 'level' => 2, 'game' => 13, 'win' => 12, 'lose' => 0, 'draw' => 1, 'goal_f' => 34, 'goal_c' => 4,
                'point' => 35, 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['club_id' => 3, 'level' => 3, 'game' => 13, 'win' => 12, 'lose' => 0, 'draw' => 1, 'goal_f' => 34, 'goal_c' => 4,
                'point' => 30, 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['club_id' => 4, 'level' => 4, 'game' => 13, 'win' => 12, 'lose' => 0, 'draw' => 1, 'goal_f' => 34, 'goal_c' => 4,
                'point' => 28, 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['club_id' => 5, 'level' => 5, 'game' => 13, 'win' => 12, 'lose' => 0, 'draw' => 1, 'goal_f' => 34, 'goal_c' => 4,
                'point' => 25, 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['club_id' => 6, 'level' => 6, 'game' => 13, 'win' => 12, 'lose' => 0, 'draw' => 1, 'goal_f' => 34, 'goal_c' => 4,
                'point' => 25, 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['club_id' => 7, 'level' => 7, 'game' => 13, 'win' => 12, 'lose' => 0, 'draw' => 1, 'goal_f' => 34, 'goal_c' => 4,
                'point' => 24, 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['club_id' => 8, 'level' => 8, 'game' => 13, 'win' => 12, 'lose' => 0, 'draw' => 1, 'goal_f' => 34, 'goal_c' => 4,
                'point' => 24, 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['club_id' => 9, 'level' => 9, 'game' => 13, 'win' => 12, 'lose' => 0, 'draw' => 1, 'goal_f' => 34, 'goal_c' => 4,
                'point' => 23, 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['club_id' => 10, 'level' => 10, 'game' => 13, 'win' => 12, 'lose' => 0, 'draw' => 1, 'goal_f' => 34, 'goal_c' => 4,
                'point' => 21, 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['club_id' => 11, 'level' => 11, 'game' => 13, 'win' => 12, 'lose' => 0, 'draw' => 1, 'goal_f' => 34, 'goal_c' => 4,
                'point' => 18, 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['club_id' => 12, 'level' => 12, 'game' => 13, 'win' => 12, 'lose' => 0, 'draw' => 1, 'goal_f' => 34, 'goal_c' => 4,
                'point' => 18, 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['club_id' => 13, 'level' => 13, 'game' => 13, 'win' => 12, 'lose' => 0, 'draw' => 1, 'goal_f' => 34, 'goal_c' => 4,
                'point' => 17, 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['club_id' => 14, 'level' => 14, 'game' => 13, 'win' => 12, 'lose' => 0, 'draw' => 1, 'goal_f' => 34, 'goal_c' => 4,
                'point' => 16, 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['club_id' => 15, 'level' => 15, 'game' => 13, 'win' => 12, 'lose' => 0, 'draw' => 1, 'goal_f' => 34, 'goal_c' => 4,
                'point' => 14, 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['club_id' => 16, 'level' => 16, 'game' => 13, 'win' => 12, 'lose' => 0, 'draw' => 1, 'goal_f' => 34, 'goal_c' => 4,
                'point' => 14, 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['club_id' => 17, 'level' => 17, 'game' => 13, 'win' => 12, 'lose' => 0, 'draw' => 1, 'goal_f' => 34, 'goal_c' => 4,
                'point' => 14, 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['club_id' => 18, 'level' => 18, 'game' => 13, 'win' => 12, 'lose' => 0, 'draw' => 1, 'goal_f' => 34, 'goal_c' => 4,
                'point' => 11, 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['club_id' => 19, 'level' => 19, 'game' => 13, 'win' => 12, 'lose' => 0, 'draw' => 1, 'goal_f' => 34, 'goal_c' => 4,
                'point' => 9, 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['club_id' => 20, 'level' => 20, 'game' => 13, 'win' => 12, 'lose' => 0, 'draw' => 1, 'goal_f' => 34, 'goal_c' => 4,
                'point' => 5, 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
        ]);
    }
}
