<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class peminjaman extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'id_anggota',
        'no_transaksi',
        'tgl_pinjam',
        'tgl_kembali',
    ];
    public function anggota()
    {
        return $this->belongsTo(anggota::class, 'id_anggota');
    }
}
