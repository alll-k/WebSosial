<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Fungsi ini berjalan saat kamu mengetik: php artisan migrate
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Menambah kolom role: 0 untuk user biasa, 1 untuk admin
            $table->integer('role')->default(0)->after('password'); 
        });
    }

    /**
     * Reverse the migrations.
     * Fungsi ini berjalan saat kamu mengetik: php artisan migrate:rollback
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Menghapus kembali kolom role jika migrasi dibatalkan
            $table->dropColumn('role');
        });
    }
};