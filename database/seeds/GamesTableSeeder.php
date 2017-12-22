<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            ['week_id' => 1, 'host' => 'بارسلونا', 'guest' => 'رئال‌ مادرید', 'day' => 'شنبه', 'timeResult' => '19:45', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['week_id' => 1, 'host' => 'اتلتیکو مادرید', 'guest' => 'سویا', 'day' => 'شنبه', 'timeResult' => '21:00', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['week_id' => 1, 'host' => 'والنسیا', 'guest' => 'لاس پالماس', 'day' => 'شنبه', 'timeResult' => '21:00', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['week_id' => 1, 'host' => 'دیپورتیوو', 'guest' => 'لگانس', 'day' => 'یکشنبه', 'timeResult' => '23:45', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['week_id' => 1, 'host' => '‌سوسیداد', 'guest' => 'سویا', 'day' => 'یکشنبه', 'timeResult' => '23:45', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['week_id' => 1, 'host' => 'آلاوس', 'guest' => 'بیلبائو', 'day' => 'یکشنبه', 'timeResult' => '19:45', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['week_id' => 1, 'host' => 'خیرونا', 'guest' => 'سلتاویگو', 'day' => 'سه شنبه', 'timeResult' => '21:00', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['week_id' => 1, 'host' => 'بتیس', 'guest' => 'مالاگا', 'day' => 'سه شنبه', 'timeResult' => '21:00', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['week_id' => 1, 'host' => 'اسپانیول', 'guest' => 'ختافه', 'day' => 'چهارشنبه', 'timeResult' => '23:45', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['week_id' => 1, 'host' => 'لوانته', 'guest' => 'ایبار', 'day' => 'چهارشنبه', 'timeResult' => '23:45', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ]);
    }
}