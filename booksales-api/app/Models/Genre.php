<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    // Contoh 5 data array genre memakai method function static agar bisa dipanggil langsung pakai class

    public static function getAll()
    {
        return [
            ['id' => 1, 'name' => 'Fiction',     'description' => 'Cerita khayalan'],
            ['id' => 2, 'name' => 'Science',     'description' => 'Buku sains'],
            ['id' => 3, 'name' => 'History',     'description' => 'Buku sejarah'],
            ['id' => 4, 'name' => 'Biography',   'description' => 'Kisah tokoh'],
            ['id' => 5, 'name' => 'Technology',  'description' => 'Buku teknologi'],
        ]; 
    }
}
