<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MakulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kode_makul' => 'USM21101', 'nama_makul' => 'Olah Raga', 'sks' => 1],
            ['kode_makul' => 'USM21102', 'nama_makul' => 'Bahasa Inggris', 'sks' => 2],
            ['kode_makul' => 'TIS21103P', 'nama_makul' => 'Algoritma dan Pemrograman', 'sks' => 3],
            ['kode_makul' => 'TIS21104P', 'nama_makul' => 'Teknologi dan Informasi', 'sks' => 3],
            ['kode_makul' => 'TIS21105P', 'nama_makul' => 'Perancangan Web', 'sks' => 3],
            ['kode_makul' => 'TIS21106P', 'nama_makul' => 'Sistem Digital', 'sks' => 3],
            ['kode_makul' => 'TIS21107', 'nama_makul' => 'Logika Matematika', 'sks' => 2],
            ['kode_makul' => 'TIS21108P', 'nama_makul' => 'Basis Data', 'sks' => 3],
            ['kode_makul' => 'USM21209', 'nama_makul' => 'Pendidikan Agama', 'sks' => 2],
            ['kode_makul' => 'TIS21210', 'nama_makul' => 'Bahasa Inggris Ilmiah', 'sks' => 2],
            ['kode_makul' => 'TIS21211P', 'nama_makul' => 'Komputer Grafis', 'sks' => 2],
            ['kode_makul' => 'TIS21212P', 'nama_makul' => 'Analisis dan Perancangan Berorientasi Objek', 'sks' => 3],
            ['kode_makul' => 'TIS21213P', 'nama_makul' => 'Pemrograman Web', 'sks' => 3],
            ['kode_makul' => 'TIS21214P', 'nama_makul' => 'Jaringan Komputer', 'sks' => 4],
            ['kode_makul' => 'TIS21215', 'nama_makul' => 'Sistem Operasi', 'sks' => 2],
            ['kode_makul' => 'TIS21216', 'nama_makul' => 'Statistika & Probabilitas', 'sks' => 2],
            ['kode_makul' => 'USM21317', 'nama_makul' => 'Bahasa Indonesia', 'sks' => 2],
            ['kode_makul' => 'TIS21318P', 'nama_makul' => 'Struktur Data', 'sks' => 3],
            ['kode_makul' => 'TIS21319P', 'nama_makul' => 'Pemrograman Berorientasi Objek', 'sks' => 3],
            ['kode_makul' => 'TIS21320P', 'nama_makul' => 'Pemrograman Framework', 'sks' => 3],
            ['kode_makul' => 'TIS21321P', 'nama_makul' => 'Manajemen Jaringan', 'sks' => 3],
            ['kode_makul' => 'TIS21322P', 'nama_makul' => 'Organisasi dan Arsitektur Komputer', 'sks' => 3],
            ['kode_makul' => 'TIS21323', 'nama_makul' => 'Metode Numerik', 'sks' => 2],
            ['kode_makul' => 'TIS21324P', 'nama_makul' => 'Kecerdasan Buatan', 'sks' => 3],
            ['kode_makul' => 'TIS21325P', 'nama_makul' => 'Komputer Animasi', 'sks' => 2],
            ['kode_makul' => 'USM21426', 'nama_makul' => 'Pendidikan Kewarganegaraan', 'sks' => 2],
            ['kode_makul' => 'TIS21427', 'nama_makul' => 'Teknologi Informasi dan Etika', 'sks' => 2],
            ['kode_makul' => 'TIS21428P', 'nama_makul' => 'Mobile Programming', 'sks' => 3],
            ['kode_makul' => 'TIS21429P', 'nama_makul' => 'Jaringan Terapan', 'sks' => 3],
            ['kode_makul' => 'TIS21430P', 'nama_makul' => 'Mikroprosesor dan Antarmuka', 'sks' => 3],
            ['kode_makul' => 'TIS21431', 'nama_makul' => 'Matematika Diskrit', 'sks' => 2],
            ['kode_makul' => 'TIS21432P', 'nama_makul' => 'Data Mining', 'sks' => 3],
            ['kode_makul' => 'TIS21433', 'nama_makul' => 'Data Science Fundamentals', 'sks' => 2],
            ['kode_makul' => 'TIS21434P', 'nama_makul' => 'Multimedia', 'sks' => 2],
            ['kode_makul' => 'TIS21435P', 'nama_makul' => 'Interaksi Manusia dan Komputer', 'sks' => 2],
            ['kode_makul' => 'TIS21536P', 'nama_makul' => 'Rekayasa Perangkat Lunak', 'sks' => 3],
            ['kode_makul' => 'TIS21537P', 'nama_makul' => 'Mobile Application', 'sks' => 3],
            ['kode_makul' => 'TIS21538P', 'nama_makul' => 'Rekayasa Web', 'sks' => 3],
            ['kode_makul' => 'TIS21539P', 'nama_makul' => 'Internet of Things', 'sks' => 3],
            ['kode_makul' => 'TIS21540', 'nama_makul' => 'Grid and Cloud Computing', 'sks' => 2],
            ['kode_makul' => 'TIS21541P', 'nama_makul' => 'Machine Learning Fundamentals', 'sks' => 3],
            ['kode_makul' => 'TIS21542', 'nama_makul' => 'Metodologi Penelitian', 'sks' => 2],
            ['kode_makul' => 'TIS21543P', 'nama_makul' => 'Computer Gaming', 'sks' => 3],
            ['kode_makul' => 'TIS21544', 'nama_makul' => 'Software Quality Assurance dan Testing', 'sks' => 2],
        ];

        DB::table('makuls')->insert($data);
    }
}
