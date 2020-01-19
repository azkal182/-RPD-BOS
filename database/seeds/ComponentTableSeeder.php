<?php

use Illuminate\Database\Seeder;

class ComponentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('components')->insert([

      [
        'name' => 'PENGEMBANGAN PERPUSTAKAAN',
        'parent_id' => NULL,
        'level' => 1


      ],
      [
        'name' => 'PENERIMAAN PESERTA DIDIK BARU DAN DAFTAR ULANG ',
        'parent_id' => NULL,
        'level' => 1

      ],
      [
        'name' => 'KEGIATAN PEMBELAJARAN DAN EKSTRAKULIKULER',
        'parent_id' => NULL,
        'level' => 1

      ],
      [
        'name' => 'PENYELENGGARAAN EVALUASI PEMBELAJARAN',
        'parent_id' => NULL,
        'level' => 1

      ],
      [
        'name' => 'PEMBIAYAAN PENGELOLAAN SEKOLAH',
        'parent_id' => NULL,
        'level' => 1

      ],
      [
        'name' => 'Pengembangan Profesi Guru dan Tenaga Kependidikan',
        'parent_id' => NULL,
        'level' => 1

      ],
      [
        'name' => 'LANGGANAN DAYA DAN JASA',
        'parent_id' => NULL,
        'level' => 1

      ],
      [
        'name' => 'Pemeliharaan dan Perawatan Sarana/Prasarana Sekolah',
        'parent_id' => NULL,
        'level' => 1

      ],
      [
        'name' => 'PEMBAYARAN HONOR ',
        'parent_id' => NULL,
        'level' => 1

      ],
      [
        'name' => 'PEMBELIAN  ALAT MULTIMEDIA PEMBELAJARAN',
        'parent_id' => NULL,
        'level' => 1
      ],
      [
        'name' => 'PENYELENGGARAAN KEGIATAN UJI KOMPETENSI DAN SERTIFIKASI KEJURUAN',
        'parent_id' => NULL,
        'level' => 1
      ],
      [
        'name' => 'PENYELENGGARAAN BKK SMK dan/atau PRAKERIN/PKL di DN dan PEMAGANGAN',
        'parent_id' => NULL,
        'level' => 1
      ],
      [
        'name' => 'A. Buku Teks Pelajaran',
        'parent_id' => 1,
        'level' => 2
      ],
      [
        'name' => 'B. Buku Non Teks Pelajaran',
        'parent_id' => 1,
        'level' => 2
      ],
      [
        'name' => 'A. Pengadaan Alat Habis Pakai Praktikum Pembelajaran',
        'parent_id' => 3,
        'level' => 2
      ],
      [
        'name' => 'B. Pengadaan Alat Habis Pakai Praktikum Pembelajaran',
        'parent_id' => 3,
        'level' => 2
      ],
      [
        'name' => 'C.Kegiatan Pembelajaran/Intrakulikuler',
        'parent_id' => 3,
        'level' => 2
      ],
      [
        'name' => 'D. Kegiatan Ekstrakurikuler',
        'parent_id' => 3,
        'level' => 2
      ],
      [
        'name' => 'E. Kegiatan Pengembangan Pendidikan Karakter / Penumbuhan Budi Pekerti',
        'parent_id' => 3,
        'level' => 2
      ],
      [
        'name' => 'F. Kegiatan Pengembangan Sekolah Sehat, aman, ramah anak dan menyenangkan',
        'parent_id' => 3,
        'level' => 2
      ],
      [
        'name' => 'G. Kegiatan Pelibatan Keluarga di Sekolah',
        'parent_id' => 3,
        'level' => 2
      ],
      [
        'name' => 'A. Ulangan Harian',
        'parent_id' => 4,
        'level' => 2
      ],
      [
        'name' => 'B. Ulangan Tengah Semester (UTS)',
        'parent_id' => 4,
        'level' => 2
      ],
      [
        'name' => 'C. Ulangan Akhir Semester (UAS)',
        'parent_id' => 4,
        'level' => 2
      ],
      [
        'name' => 'D. Ujian Sekolah',
        'parent_id' => 4,
        'level' => 2
      ],
      [
        'name' => 'E. Ujian Nasional Berbasis Komputer (UNBK)',
        'parent_id' => 4,
        'level' => 2
      ],






      [
        'name' => 'A. MGMP',
        'parent_id' => 6,
        'level' => 2
      ],
      [
        'name' => 'B. MKKS',
        'parent_id' => 6,
        'level' => 2
      ],
      [
        'name' => 'C. IHT/ WORKSHOP',
        'parent_id' => 6,
        'level' => 2
      ],
      [
        'name' => 'A. Pemeliharaan dan Perbaikan Sarana Sekolah',
        'parent_id' => 8,
        'level' => 2
      ],
      [
        'name' => 'B. Pemeliharaan dan Perawatan Sarana/Prasarana Sekolah',
        'parent_id' => 8,
        'level' => 2
      ],
      [
        'name' => 'A. Penyelenggaraan BKK SMK',
        'parent_id' => 12,
        'level' => 2
      ],
      [
        'name' => 'B. Praktek Kerja Industri',
        'parent_id' => 12,
        'level' => 2
      ],
      [
        'name' => 'C. Pemantauan lulusan SMK di Dunia Industri',
        'parent_id' => 12,
        'level' => 2
      ],
      [
        'name' => 'D. Magang Guru di Industri',
        'parent_id' => 12,
        'level' => 2
      ],


      [
        'name' => ' 1) PENYELENGGARA KURIKULUM 2013',
        'parent_id' => 13,
        'level' => 3
      ],
      [
        'name' => ' 2) PENYELENGGARA KURIKULUM 2006',
        'parent_id' => 13,
        'level' => 3
      ],
      [
        'name' => ' 1).  Alat Praktikum IPA',
        'parent_id' => 15,
        'level' => 3
      ]





      ]);
    }
}
