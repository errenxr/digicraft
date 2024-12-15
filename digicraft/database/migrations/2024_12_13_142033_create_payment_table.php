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
        Schema::create('payment', function (Blueprint $table) {
            $table->string('id_bukti', 4)->primary();
            $table->unsignedBigInteger('no_pesanan');
            $table->unsignedBigInteger('id_customer');
            $table->string('bukti');
            $table->timestamps();

            $table->foreign('no_pesanan')->references('no_pesanan')->on('order_details')->onDelete('cascade');
            $table->foreign('id_customer')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};
