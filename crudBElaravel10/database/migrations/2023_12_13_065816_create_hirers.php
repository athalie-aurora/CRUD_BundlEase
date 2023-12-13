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
        Schema::create('hirers', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('usia');
            $table->string('alamat');
            $table->string('riwayatKesehatan');
            $table->string('keluhan');
            $table->enum('jeniskelamin', ['Laki-Laki', 'Perempuan']);
            $table->bigInteger('notelpon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hirers');
    }
};
