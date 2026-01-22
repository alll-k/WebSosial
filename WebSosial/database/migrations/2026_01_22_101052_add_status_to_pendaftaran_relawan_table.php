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
    Schema::table('pendaftaran_relawan', function (Blueprint $table) {
        if (!Schema::hasColumn('pendaftaran_relawan', 'status')) {
            $table->string('status')->default('Berhasil Terdaftar');
        }
    });
}

public function down()
{
    Schema::table('pendaftaran_relawan', function (Blueprint $table) {
        $table->dropColumn('status');
    });
}

};
