<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //$this->call(UsersTableSeeder::class);
        $this->call([
            CategoriesTableSeeder::class,
            ClubsTableSeeder::class,
            CountriesTableSeeder::class,
            CupsTableSeeder::class,
            GamesTableSeeder::class,
            LeaguesTableSeeder::class,
            PlayersTableSeeder::class,
            PrizesTableSeeder::class,
            SeasonsTableSeeder::class,
            StandingsTableSeeder::class,
            StadiaTableSeeder::class,
            UsersTableSeeder::class,
            WeeksTableSeeder::class,
            ]);
    }
}
