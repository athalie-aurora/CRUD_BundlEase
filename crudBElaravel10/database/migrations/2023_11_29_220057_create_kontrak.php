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
        Schema::create('kontrak', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nurses_id');
            $table->string('namaPenyewa');
            $table->string('usia');
            $table->string('kondisi');
            $table->string('alamat');
            $table->enum('Durasi', ['1 Hari','3 Hari ', '1 Minggu', '2 Minggu ', '1 Bulan']);
            $table->foreign('nurses_id')->references('id')->on('nurses')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kontrak');
    }
};
