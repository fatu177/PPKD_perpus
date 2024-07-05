<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class detail_peminjam extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_peminjam',
        'id_buku',
        'tgl_kembali_buku',
        'keterangan',
    ];

    public function peminjaman(): BelongsTo
    {
        return $this->belongsTo(peminjaman::class, 'id_peminjam', 'id');
    }
}
