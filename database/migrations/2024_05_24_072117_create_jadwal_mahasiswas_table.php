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
        Schema::create('jadwal_mahasiswas', function (Blueprint $table) {
            $table->foreignId('prodi_id')->constrained();
            $table->foreignId('mata_kuliah_id')->constrained();
            $table->foreignId('mahasiswa_id')->constrained();

            $table->string('ruangan');
            $table->time('jam');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_mahasiswas');
    }
};
