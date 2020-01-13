<?php

use Illuminate\Database\Seeder;

class komp3TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('komp3')->insert([

            [
              'id_komp2' => 1,
              'id_komp3' => 1,
              't_komp3' => '1). PENYELENGGARA KURIKULUM 2013',
              'tahun' => 2019
            ],[
              'id_komp2' => 1,
              'id_komp3' => 2,
              't_komp3' => '2). PENYELENGGARA KURIKULUM 2006',
              'tahun' => 2019
            ]

        ]);
    }
}
