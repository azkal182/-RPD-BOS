<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert(
        [
          'Name' => 'azka',
          'Email' => 'admin@admin.com',
          'Password' => bcrypt('admin123')
        ]);
    }
}
