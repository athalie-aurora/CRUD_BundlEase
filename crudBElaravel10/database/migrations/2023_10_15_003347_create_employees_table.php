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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('jeniskelamin', ['Laki-Laki', 'Perempuan']);
            $table->enum('layanan', ['Konsultasi Online', 'Perawatan Ibu Hamil', 'Perawatan Pasca Melahirkan', 'Jasa Perawatan Bayi', 'Edukasi Orangtua']);
            $table->bigInteger('notelpon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
