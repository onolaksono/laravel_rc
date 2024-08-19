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
        Schema::table('students', function (Blueprint $table) {
            //mengganti atribut gender menjadi varchar(1) dan nullable
            $table->string('gender', 1)->nullable()->after('nama_siswa')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            //mengembalikkan ke atribut semula
            $table->string('gender', 10)->required()->after('nama_siswa')->change();
        });
    }
};
