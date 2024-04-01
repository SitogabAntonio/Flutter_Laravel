<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIbadahRayaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ibadah_raya', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('username');
            $table->dateTime('date');
            $table->text('deskripsi');
            $table->string('image'); // Ubah sesuai dengan nama yang tepat untuk kolom gambar
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ibadah_raya');
    }
}
