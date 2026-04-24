<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'title' => 'Bumi',
                'description' => 'Petualangan Raib, Ali, dan Seli di dunia paralel.',
                'price' => 95000,
                'stock' => 50,
                'cover_photo' => 'bumi.jpg',
                'genre_id' => 2,
                'author_id' => 1,
            ],
            [
                'title' => 'Laskar Pelangi',
                'description' => 'Kisah 10 anak Belitung yang berjuang menggapai mimpi.',
                'price' => 85000,
                'stock' => 40,
                'cover_photo' => 'laskar_pelangi.jpg',
                'genre_id' => 2,
                'author_id' => 2,
            ],
            [
                'title' => 'Kambing Jantan',
                'description' => 'Diary konyol mahasiswa Indonesia di Australia.',
                'price' => 75000,
                'stock' => 35,
                'cover_photo' => 'kambing_jantan.jpg',
                'genre_id' => 3,
                'author_id' => 3,
            ],
            [
                'title' => 'Supernova: Ksatria, Puteri, dan Bintang Jatuh',
                'description' => 'Kisah cinta yang terjalin dengan konsep fisika kuantum.',
                'price' => 90000,
                'stock' => 30,
                'cover_photo' => 'supernova.jpg',
                'genre_id' => 4,
                'author_id' => 4,
            ],
            [
                'title' => 'Ayat-Ayat Cinta',
                'description' => 'Perjalanan cinta mahasiswa Indonesia di Mesir.',
                'price' => 88000,
                'stock' => 45,
                'cover_photo' => 'ayat_ayat_cinta.jpg',
                'genre_id' => 5,
                'author_id' => 5,
            ],
        ]);
    }
}
