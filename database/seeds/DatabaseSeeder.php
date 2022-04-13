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

        $this->call(CountrySeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(AddresSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(PersonSeeder::class);
        $this->call(PetsSeeder::class);
        $this->call(PlayerSeeder::class);
        $this->call(CarSeeder::class);
    }
}
