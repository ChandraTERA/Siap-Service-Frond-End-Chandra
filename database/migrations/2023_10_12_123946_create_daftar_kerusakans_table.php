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
        Schema::create('daftar_kerusakans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('device_id')->nullable();
            $table->string('jenis_kerusakan')->nullable();
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('device_id')->references('id')->on('devices')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_kerusakans');
    }
};
