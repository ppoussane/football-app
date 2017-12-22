<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ClubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clubs')->insert([
            ['name' => 'Barcelona', 'image' => 'ImageBarcelona', 'country_id' => 1, 'manager' => 'Valverde', 'chairman' => 'Bartomeo',
                'website' => 'www.fcbarcelona.com', 'found' => Carbon::create('2000', '01', '01'), 'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Real Madrid', 'image' => 'ImageReal madrid', 'country_id' => 1, 'manager' => 'Zidane', 'chairman' => 'Perez',
                'website' => 'www.realmadrid.com', 'found' => Carbon::create('2000', '01', '01'),'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Sevilla', 'image' => 'ImageSevilla', 'country_id' => 1, 'manager' => 'Brizzo', 'chairman' => 'Sung',
                'website' => 'www.sevilla.com', 'found' => Carbon::create('2000', '01', '01'),'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Atletico Madrid', 'image' => 'ImageAtletico madrid', 'country_id' => 1, 'manager' => 'Simeone', 'chairman' => 'Cerezo',
                'website' => 'www.atleticomadrid.com', 'found' => Carbon::create('2000', '01', '01'),'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Valencia', 'image' => 'ImageSevilla', 'country_id' => 1, 'manager' => 'Brizzo', 'chairman' => 'Sung',
                'website' => 'www.sevilla.com', 'found' => Carbon::create('2000', '01', '01'),'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Villarreal', 'image' => 'ImageSevilla', 'country_id' => 1, 'manager' => 'Brizzo', 'chairman' => 'Sung',
                'website' => 'www.sevilla.com', 'found' => Carbon::create('2000', '01', '01'),'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Sociedad', 'image' => 'ImageSevilla', 'country_id' => 1, 'manager' => 'Brizzo', 'chairman' => 'Sung',
                'website' => 'www.sevilla.com', 'found' => Carbon::create('2000', '01', '01'),'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Betis', 'image' => 'ImageSevilla', 'country_id' => 1, 'manager' => 'Brizzo', 'chairman' => 'Sung',
                'website' => 'www.sevilla.com', 'found' => Carbon::create('2000', '01', '01'),'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Leganes', 'image' => 'ImageSevilla', 'country_id' => 1, 'manager' => 'Brizzo', 'chairman' => 'Sung',
                'website' => 'www.sevilla.com', 'found' => Carbon::create('2000', '01', '01'),'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Girona', 'image' => 'ImageSevilla', 'country_id' => 1, 'manager' => 'Brizzo', 'chairman' => 'Sung',
                'website' => 'www.sevilla.com', 'found' => Carbon::create('2000', '01', '01'),'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Celta', 'image' => 'ImageSevilla', 'country_id' => 1, 'manager' => 'Brizzo', 'chairman' => 'Sung',
                'website' => 'www.sevilla.com', 'found' => Carbon::create('2000', '01', '01'),'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Getafe', 'image' => 'ImageSevilla', 'country_id' => 1, 'manager' => 'Brizzo', 'chairman' => 'Sung',
                'website' => 'www.sevilla.com', 'found' => Carbon::create('2000', '01', '01'),'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Espanyol', 'image' => 'ImageSevilla', 'country_id' => 1, 'manager' => 'Brizzo', 'chairman' => 'Sung',
                'website' => 'www.sevilla.com', 'found' => Carbon::create('2000', '01', '01'),'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Levante', 'image' => 'ImageSevilla', 'country_id' => 1, 'manager' => 'Brizzo', 'chairman' => 'Sung',
                'website' => 'www.sevilla.com', 'found' => Carbon::create('2000', '01', '01'),'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Dportivo', 'image' => 'ImageSevilla', 'country_id' => 1, 'manager' => 'Brizzo', 'chairman' => 'Sung',
                'website' => 'www.sevilla.com', 'found' => Carbon::create('2000', '01', '01'),'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Bilbao', 'image' => 'ImageSevilla', 'country_id' => 1, 'manager' => 'Brizzo', 'chairman' => 'Sung',
                'website' => 'www.sevilla.com', 'found' => Carbon::create('2000', '01', '01'),'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Eibar', 'image' => 'ImageSevilla', 'country_id' => 1, 'manager' => 'Brizzo', 'chairman' => 'Sung',
                'website' => 'www.sevilla.com', 'found' => Carbon::create('2000', '01', '01'),'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Alaves', 'image' => 'ImageSevilla', 'country_id' => 1, 'manager' => 'Brizzo', 'chairman' => 'Sung',
                'website' => 'www.sevilla.com', 'found' => Carbon::create('2000', '01', '01'),'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Las Palmas', 'image' => 'ImageSevilla', 'country_id' => 1, 'manager' => 'Brizzo', 'chairman' => 'Sung',
                'website' => 'www.sevilla.com', 'found' => Carbon::create('2000', '01', '01'),'created_at' => carbon::now(), 'updated_at' => carbon::now()],
            ['name' => 'Malaga', 'image' => 'ImageSevilla', 'country_id' => 1, 'manager' => 'Brizzo', 'chairman' => 'Sung',
                'website' => 'www.sevilla.com', 'found' => Carbon::create('2000', '01', '01'),'created_at' => carbon::now(), 'updated_at' => carbon::now()],
        ]);
    }
}
