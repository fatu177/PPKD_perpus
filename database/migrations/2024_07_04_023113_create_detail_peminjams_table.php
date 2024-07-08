<?php

use App\Models\peminjaman;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detail_peminjams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_peminjam')
                ->nullable()
                ->constrained('peminjamen', 'id')->cascadeOnUpdate()->nullOnDelete();
            $table->foreignId('id_buku')
                ->nullable()
                ->constrained('bukus', 'id')->cascadeOnUpdate()->nullOnDelete();
            $table->date('tgl_kembali_buku')->nullable();
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_peminjams');
    }
};
