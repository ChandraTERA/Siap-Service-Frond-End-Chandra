<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('kerusakans', function (Blueprint $table) {
            // Kolom-kolom yang sudah ada
            $table->id();
            $table->string('user_id');
            $table->string('nama_lengkap');
            $table->string('no_telepon');
            $table->text('solusi_kerusakan');
            $table->decimal('biaya_service', 10, 2)->default(0.00);
            $table->decimal('total_pembayaran', 10, 2)->default(0.00);
            $table->timestamps();

            // Kolom baru untuk konfirmasi mandiri
            $table->boolean('konfirmasi_mandiri')->default(false);
        });
    }


    public function down()
    {
        Schema::table('kerusakans', function (Blueprint $table) {
            $table->dropColumn('konfirmasi_mandiri');
        });
    }
};
