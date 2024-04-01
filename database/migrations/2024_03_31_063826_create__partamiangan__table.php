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
        Schema::create('partamiangan', function (Blueprint $table) {
            $table->id();
            $table->string('kegiatan');
            $table->string('petugas');
            $table->string('tempat');
            $table->dateTime('tanggal_waktu');
            $table->text('deskripsi_singkat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partamiangan');
    }
};
