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
        Schema::create('kategori', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nurses_id');
            $table->enum('Layanan', ['Perawatan Ibu Hamil','Perawatan Pasca Melahirkan', 'Pelatihan Kepada Orang Tua', 'Konsultasi', 'Perawatan Bayi']);
            $table->foreign('nurses_id')->references('id')->on('nurses')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori');
    }
};
