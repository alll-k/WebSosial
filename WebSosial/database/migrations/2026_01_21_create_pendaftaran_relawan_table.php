<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Pastikan tidak ada ->connection('mysql_second') di sini
        Schema::create('pendaftaran_relawan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('email');
            $table->string('no_wa');
            $table->string('alamat');
            $table->text('alasan'); // Gunakan text agar alasan pendaftar tidak terpotong
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('kegiatan'); 
            $table->timestamps();
        });
    }

    public function down(): void
    {
        // HAPUS connection('mysql_second') di sini!
        Schema::dropIfExists('pendaftaran_relawan');
    }
};