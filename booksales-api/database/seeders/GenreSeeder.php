<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->insert([
            ['name' => 'Romance', 'description' => 'Cerita percintaan dan hubungan antar tokoh.'],
            ['name' => 'Petualangan', 'description' => 'Kisah perjalanan dan eksplorasi penuh tantangan.'],
            ['name' => 'Komedi', 'description' => 'Cerita ringan menghibur dan penuh humor.'],
            ['name' => 'Fiksi Ilmiah', 'description' => 'Cerita berbasis sains dan teknologi masa depan.'],
            ['name' => 'Islami', 'description' => 'Karya sastra bernuansa dan bermuatan islami.'],
        ]);
    }
}
