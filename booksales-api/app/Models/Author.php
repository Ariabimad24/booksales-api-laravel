<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    // Contoh 5 data array author memakai method function static agar bisa dipanggil langsung pakai class

    public static function getAll()
    {
        return [
            ['name' => 'Pramoedya Ananta Toer', 'bio' => 'Sastrawan Indonesia penulis Tetralogi Buru', 'birth_date' => '1925-02-06', 'nationality' => 'Indonesia'],
            ['name' => 'Andrea Hirata', 'bio' => 'Penulis novel Laskar Pelangi', 'birth_date' => '1967-10-24', 'nationality' => 'Indonesia'],
            ['name' => 'J.K. Rowling', 'bio' => 'Penulis seri novel Harry Potter', 'birth_date' => '1965-07-31', 'nationality' => 'Inggris'],
            ['name' => 'Tere Liye', 'bio' => 'Penulis novel populer Indonesia', 'birth_date' => '1979-05-21', 'nationality' => 'Indonesia'],
            ['name' => 'Robert C. Martin', 'bio' => 'Penulis buku Clean Code dan Clean Architecture', 'birth_date' => '1952-12-05', 'nationality' => 'Amerika Serikat'],
        ];
    }

    
}
