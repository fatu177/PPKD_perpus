<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('peminjamen', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_anggota')->nullable();
            $table->foreign('id_anggota')->references('id')->on('anggotas')->onDelete('set NULL')->onUpdate('cascade');
            $table->string('no_transaksi');
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjamen');
    }
};
