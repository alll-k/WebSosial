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
        if (Schema::hasTable('kegiatan') && !Schema::hasColumn('kegiatan', 'jam')) {
            Schema::table('kegiatan', function (Blueprint $table) {
                $table->string('jam')->nullable()->after('tanggal');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('kegiatan') && Schema::hasColumn('kegiatan', 'jam')) {
            Schema::table('kegiatan', function (Blueprint $table) {
                $table->dropColumn('jam');
            });
        }
    }
};
