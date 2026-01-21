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
        Schema::create('pendaftaran_relawan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nama_panggilan')->nullable();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->string('no_wa');
            $table->string('email');
            $table->string('instansi')->nullable();
            $table->text('keahlian')->nullable();
            $table->text('alasan');
            $table->text('pengalaman')->nullable();
            $table->string('kegiatan')->nullable();
            $table->string('tanggal_kegiatan')->nullable();
            $table->string('jam_kegiatan')->nullable();
            $table->string('lokasi_kegiatan')->nullable();
            $table->enum('status', ['pending', 'disetujui', 'ditolak'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftaran_relawan');
    }
};
