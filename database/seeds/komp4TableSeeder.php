<?php

use Illuminate\Database\Seeder;

class komp4TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('komp4')->insert([

            [
              'id_komp3' => 1,
              'id_komp4' => 1,
              't_komp4' => 'a). Buku Teks Pelajaran Siswa Kelas X  (baru melaksanakan kurikulum 2013 mulai Tahun 2017 ini) ',
              'tahun' => 2019
            ],[
              'id_komp3' => 1,
              'id_komp4' => 2,
              't_komp4' => 'b). Buku Pegangan Guru Kelas X (baru melaksanakan kurikulum 2013 mulai Tahun 2017 ini) ',
              'tahun' => 2019
            ]
          ]);
    }
}
