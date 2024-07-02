<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_buku',
        'penerbit',
        'qty',
        'deskripsi',
        'penulis',
        'genre',

    ];
}
