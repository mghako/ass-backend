<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call([
            UsersTableSeeder::class,
            CitiesTableSeeder::class,
            TownshipsTableSeeder::class,
            HostelsTableSeeder::class
        ]);
    }
}
