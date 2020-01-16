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
        'parent_id' => NULL


      ],
      [
        'name' => 'PENERIMAAN PESERTA DIDIK BARU DAN DAFTAR ULANG ',
        'parent_id' => NULL

      ],
      [
        'name' => 'KEGIATAN PEMBELAJARAN DAN EKSTRAKULIKULER',
        'parent_id' => NULL

      ],
      [
        'name' => 'PENYELENGGARAAN EVALUASI PEMBELAJARAN',
        'parent_id' => NULL

      ],
      [
        'name' => 'PEMBIAYAAN PENGELOLAAN SEKOLAH',
        'parent_id' => NULL

      ],
      [
        'name' => 'Pengembangan Profesi Guru dan Tenaga Kependidikan',
        'parent_id' => NULL

      ],
      [
        'name' => 'LANGGANAN DAYA DAN JASA',
        'parent_id' => NULL

      ],
      [
        'name' => 'Pemeliharaan dan Perawatan Sarana/Prasarana Sekolah',
        'parent_id' => NULL

      ],
      [
        'name' => 'PEMBAYARAN HONOR ',
        'parent_id' => NULL

      ],
      [
        'name' => 'PEMBELIAN  ALAT MULTIMEDIA PEMBELAJARAN',
        'parent_id' => NULL
      ],
      [
        'name' => 'PENYELENGGARAAN KEGIATAN UJI KOMPETENSI DAN SERTIFIKASI KEJURUAN',
        'parent_id' => NULL
      ],
      [
        'name' => 'PENYELENGGARAAN BKK SMK dan/atau PRAKERIN/PKL di DN dan PEMAGANGAN',
        'parent_id' => NULL
      ],
      [
        'name' => 'A. Buku Teks Pelajaran',
        'parent_id' => 1
      ],
      [
        'name' => 'B. Buku Non Teks Pelajaran',
        'parent_id' => 1
      ],
      [
        'name' => 'A. Pengadaan Alat Habis Pakai Praktikum Pembelajaran',
        'parent_id' => 3
      ],
      [
        'name' => 'B. Pengadaan Alat Habis Pakai Praktikum Pembelajaran',
        'parent_id' => 3
      ],
      [
        'name' => 'C.Kegiatan Pembelajaran/Intrakulikuler',
        'parent_id' => 3
      ],
      [
        'name' => 'D. Kegiatan Ekstrakurikuler',
        'parent_id' => 3
      ],
      [
        'name' => 'E. Kegiatan Pengembangan Pendidikan Karakter / Penumbuhan Budi Pekerti',
        'parent_id' => 3
      ],
      [
        'name' => 'F. Kegiatan Pengembangan Sekolah Sehat, aman, ramah anak dan menyenangkan',
        'parent_id' => 3
      ],
      [
        'name' => 'G. Kegiatan Pelibatan Keluarga di Sekolah',
        'parent_id' => 3
      ],
      [
        'name' => 'A. Ulangan Harian',
        'parent_id' => 4
      ],
      [
        'name' => 'B. Ulangan Tengah Semester (UTS)',
        'parent_id' => 4
      ],
      [
        'name' => 'C. Ulangan Akhir Semester (UAS)',
        'parent_id' => 4
      ],
      [
        'name' => 'D. Ujian Sekolah',
        'parent_id' => 4
      ],
      [
        'name' => 'E. Ujian Nasional Berbasis Komputer (UNBK)',
        'parent_id' => 4
      ],






      [
        'name' => 'A. MGMP',
        'parent_id' => 6
      ],
      [
        'name' => 'B. MKKS',
        'parent_id' => 6
      ],
      [
        'name' => 'C. IHT/ WORKSHOP',
        'parent_id' => 6
      ],
      [
        'name' => 'A. Pemeliharaan dan Perbaikan Sarana Sekolah',
        'parent_id' => 8
      ],
      [
        'name' => 'B. Pemeliharaan dan Perawatan Sarana/Prasarana Sekolah',
        'parent_id' => 8
      ],
      [
        'name' => 'A. Penyelenggaraan BKK SMK',
        'parent_id' => 12
      ],
      [
        'name' => 'B. Praktek Kerja Industri',
        'parent_id' => 12
      ],
      [
        'name' => 'C. Pemantauan lulusan SMK di Dunia Industri',
        'parent_id' => 12
      ],
      [
        'name' => 'D. Magang Guru di Industri',
        'parent_id' => 12
      ]

      ]);
    }
}
