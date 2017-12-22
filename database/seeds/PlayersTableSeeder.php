<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            ['country_id' => 3, 'name' => 'Lionel Andres Messi', 'nicName' => 'Messi', 'image' => 'lionel andres messi',
               'height' => 165, 'birthDate' => Carbon::create('2000', '01', '01'), 'position' => 'Forward'],
            ['country_id' => 1, 'name' => 'Andres Julio Iniesta', 'nicName' => 'Iniesta', 'image' => 'andres julio iniesta',
                'height' => 163, 'birthDate' =>  Carbon::create('2000', '01', '01'), 'position' => 'Midfilder'],
            ['country_id' => 2, 'name' => 'Cristiano Ronaldo Alveira', 'nicName' => 'Ronaldo', 'image' => 'cristiano ronaldo',
                'height' => 189, 'birthDate' =>  Carbon::create('2000', '01', '01'), 'position' => 'Forward'],
            ['country_id' => 1, 'name' => 'Sergio Ramos', 'nicName' => 'Ramos', 'image' => 'sergio ramos',
                'height' => 188, 'birthDate' =>  Carbon::create('2000', '01', '01'), 'position' => 'Defence'],
            ['country_id' => 5, 'name' => 'Antoain Grizmann', 'nicName' => 'Grizmann', 'image' => 'grizmann',
                'height' => 165, 'birthDate' =>  Carbon::create('2000', '01', '01'), 'position' => 'Forward'],
        ]);
    }
}