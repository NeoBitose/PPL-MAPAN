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
        Schema::create('penyakit', function (Blueprint $table) {
            $table->increments('id_penyakit');
            $table->string('nama_penyakit', 50);
            $table->text('definisi');
            $table->text('penyebab');
            $table->text('pengendalian_teknis');
            $table->text('pengendalian_gejala');
            $table->unsignedInteger('jenis_padi_id');

            $table->foreign('jenis_padi_id')->references('id_jenis_padi')->on('jenis_padi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyakit');
    }
};
