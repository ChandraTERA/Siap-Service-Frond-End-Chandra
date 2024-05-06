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
        Schema::create('laporan_pengguna', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ID_pengguna');
            $table->string('Nama');
            $table->string('Alamat');
            $table->string('No_Telp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_pengguna');
    }
};
