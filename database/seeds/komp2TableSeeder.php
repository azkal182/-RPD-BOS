<?php

use Illuminate\Database\Seeder;

class komp2TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('komp2')->insert([
        [
          'id_komp1' => 1,
          'id_komp2' => 1,
          't_komp2' => 'A. Buku Teks Pelajaran',
          'tahun' => 2019
        ],[
          'id_komp1' => 1,
          'id_komp2' => 2,
          't_komp2' => 'B. Buku Non Teks Pelajaran',
          'tahun' => 2019
        ],[
          'id_komp1' => 3,
          'id_komp2' => 3,
          't_komp2' => 'A. Pengadaan Alat Habis Pakai Praktikum Pembelajaran',
          'tahun' => 2019
        ],[
          'id_komp1' => 3,
          'id_komp2' => 4,
          't_komp2' => 'B. Pengadaan Alat Habis Pakai Praktikum Pembelajaran',
          'tahun' => 2019
        ],[
          'id_komp1' => 3,
          'id_komp2' => 5,
          't_komp2' => 'C.Kegiatan Pembelajaran/Intrakulikuler',
          'tahun' => 2019
        ],[
          'id_komp1' => 3,
          'id_komp2' => 6,
          't_komp2' => 'D. Kegiatan Ekstrakurikuler',
          'tahun' => 2019
        ],[
          'id_komp1' => 3,
          'id_komp2' => 7,
          't_komp2' => 'E. Kegiatan Pengembangan Pendidikan Karakter / Penumbuhan Budi Pekerti',
          'tahun' => 2019
        ],[
          'id_komp1' => 3,
          'id_komp2' => 8,
          't_komp2' => 'F. Kegiatan Pengembangan Sekolah Sehat, aman, ramah anak dan menyenangkan',
          'tahun' => 2019
        ],[
          'id_komp1' => 3,
          'id_komp2' => 9,
          't_komp2' => 'G. Kegiatan Pelibatan Keluarga di Sekolah',
          'tahun' => 2019
        ],[
          'id_komp1' => 4,
          'id_komp2' => 10,
          't_komp2' => 'A. Ulangan Harian',
          'tahun' => 2019
        ],[
          'id_komp1' => 4,
          'id_komp2' => 11,
          't_komp2' => 'B. Ulangan Tengah Semester (UTS)',
          'tahun' => 2019
        ],[
          'id_komp1' => 4,
          'id_komp2' => 11,
          't_komp2' => 'C. Ulangan Akhir Semester (UAS)',
          'tahun' => 2019
        ],[
          'id_komp1' => 4,
          'id_komp2' => 11,
          't_komp2' => 'D. Ujian Sekolah',
          'tahun' => 2019
        ],[
          'id_komp1' => 4,
          'id_komp2' => 11,
          't_komp2' => 'E. Ujian Nasional Berbasis Komputer (UNBK)',
          'tahun' => 2019
        ],[
          'id_komp1' => 4,
          'id_komp2' => 11,
          't_komp2' => 'B. Ulangan Tengah Semester (UTS)',
          'tahun' => 2019
        ],
      ]);
    }
}
