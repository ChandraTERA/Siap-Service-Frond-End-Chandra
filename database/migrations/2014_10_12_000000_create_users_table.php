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
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('id_customer')->unique()->nullable();
            $table->string('nama_lengkap')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('no_tlp', 14)->nullable();
            $table->text('alamat')->nullable();
            $table->string('kota')->nullable();
            $table->string('password')->nullable();
            $table->integer('role')->default(0);
            $table->string('fillpath_profil')->nullable();
            $table->string('otp_verify')->nullable();
            $table->boolean('is_verified')->default(false)->nullable();
            $table->timestamp('otp_created_at');
            $table->timestamps();
            $table->rememberToken();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
