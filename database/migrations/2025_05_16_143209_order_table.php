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
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('status');
            $table->string('noresi')->nullable();
            $table->string('kurir')->nullable();
            $table->string('layanan_ongkir')->nullable();
            $table->string('biaya_ongkir')->nullable();
            $table->string('estimasi_ongkir')->nullable();
            $table->integer('total_berat')->nullable();
            $table->double('total_harga');
            $table->text('alamat')->nullable();
            $table->string('pos')->nullable();
            $table->timestamps();
            $table->foreign('customer_id')->references('id')->on('customer')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};