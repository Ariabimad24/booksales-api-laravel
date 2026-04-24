<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('authors')->insert([
            ['name' => 'Tere Liye', 'photo' => 'tere_liye.jpg', 'bio' => 'Penulis novel ternama Indonesia dengan karya-karya bestseller.'],
            ['name' => 'Andrea Hirata', 'photo' => 'andrea_hirata.jpg', 'bio' => 'Penulis Laskar Pelangi, lahir di Belitung.'],
            ['name' => 'Raditya Dika', 'photo' => 'raditya_dika.jpg', 'bio' => 'Penulis komedi dan humoris Indonesia.'],
            ['name' => 'Dewi Lestari', 'photo' => 'dewi_lestari.jpg', 'bio' => 'Penulis seri Supernova, juga dikenal sebagai Dee.'],
            ['name' => 'Habiburrahman El Shirazy', 'photo' => 'kang_abik.jpg', 'bio' => 'Penulis novel islami, dikenal dengan Ayat-Ayat Cinta.'],
        ]);
    }
}
