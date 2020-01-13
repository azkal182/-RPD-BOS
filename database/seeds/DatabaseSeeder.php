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
        $this->call(detailkompTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(komp1TableSeeder::class);
        $this->call(komp2TableSeeder::class);
        $this->call(komp3TableSeeder::class);
        $this->call(komp4TableSeeder::class);

    }
}
