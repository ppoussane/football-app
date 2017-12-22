<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class WeeksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('weeks')->insert([
            ['name' => 'هفته اول لالیگا', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'هفته دوم لالیگا', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'هفته سوم لالیگا', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'هفته چهارم لالیگا', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'هفته پنجم لالیگا', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'هفته ششم لالیگا', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'هفته هفتم لالیگا', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'هفته هشتم لالیگا', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'هفته نهم لالیگا', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'هفته دهم لالیگا', 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ]);
    }
}
