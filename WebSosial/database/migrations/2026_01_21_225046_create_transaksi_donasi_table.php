<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('transaksi_donasi', function (Blueprint $table) {
        $table->id();
        $table->string('kode_transaksi')->unique(); // ID untuk cek di bank/payment gateway
        $table->string('nama_donatur');
        $table->string('email');
        $table->string('no_hp');
        $table->decimal('jumlah_donasi', 15, 2); // Menggunakan decimal agar akurat untuk uang
        $table->string('metode_pembayaran'); // Misal: Transfer Bank, E-Wallet
        $table->enum('status_pembayaran', ['pending', 'berhasil', 'gagal'])->default('pending');
        $table->text('pesan_kebaikan')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_donasi');
    }
};
