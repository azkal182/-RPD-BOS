<?php

use Illuminate\Database\Seeder;

class komp1TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('komp1')->insert([
        [
          'id_komp1' => 1,
          't_komp1' => 'PENGEMBANGAN PERPUSTAKAAN',
          'tahun' => 2019
        ],[
          'id_komp1' => 2,
          't_komp1' => 'PENERIMAAN PESERTA DIDIK BARU DAN DAFTAR ULANG ',
          'tahun' => 2019
        ],[
          'id_komp1' => 3,
          't_komp1' => 'KEGIATAN PEMBELAJARAN DAN EKSTRAKULIKULER',
          'tahun' => 2019
        ],[
          'id_komp1' => 4,
          't_komp1' => 'PENYELENGGARAAN EVALUASI PEMBELAJARAN',
          'tahun' => 2019
        ],[
          'id_komp1' => 5,
          't_komp1' => 'PEMBIAYAAN PENGELOLAAN SEKOLAH',
          'tahun' => 2019
        ],[
          'id_komp1' => 6,
          't_komp1' => 'Pengembangan Profesi Guru dan Tenaga Kependidikan',
          'tahun' => 2019
        ],[
          'id_komp1' => 7,
          't_komp1' => 'LANGGANAN DAYA DAN JASA',
          'tahun' => 2019
        ],[
          'id_komp1' => 8,
          't_komp1' => 'Pemeliharaan dan Perawatan Sarana/Prasarana Sekolah',
          'tahun' => 2019
        ],[
          'id_komp1' => 9,
          't_komp1' => 'PEMBAYARAN HONOR ',
          'tahun' => 2019
        ],[
          'id_komp1' => 10,
          't_komp1' => 'PEMBELIAN  ALAT MULTIMEDIA PEMBELAJARAN',
          'tahun' => 2019
        ],[
          'id_komp1' => 11,
          't_komp1' => 'PENYELENGGARAAN KEGIATAN UJI KOMPETENSI DAN SERTIFIKASI KEJURUAN',
          'tahun' => 2019
        ],[
          'id_komp1' => 12,
          't_komp1' => 'PENYELENGGARAAN BKK SMK dan/atau PRAKERIN/PKL di DN dan PEMAGANGAN',
          'tahun' => 2019
        ]
      ]);
    }
}
