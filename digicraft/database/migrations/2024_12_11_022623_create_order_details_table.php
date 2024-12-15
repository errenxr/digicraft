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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id('no_pesanan')->primary();
            $table->string('id_layanan', 4)->nullable();
            $table->text('deskripsi_pesanan');
            $table->string('email_kirim');
            $table->unsignedBigInteger('id_customer');
            $table->timestamp('tanggal_pesan')->nullable();

            $table->foreign('id_layanan')->references('id_layanan')->on('layanan')->onDelete('restrict');
            $table->foreign('id_customer')->references('id')->on('users')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
