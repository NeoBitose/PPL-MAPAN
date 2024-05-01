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
        Schema::create('gejala_penyakit', function (Blueprint $table) {
            $table->increments('id_gejala_penyakit');
            $table->unsignedInteger('gejala_id');
            $table->unsignedInteger('penyakit_id');

            $table->foreign('gejala_id')->references('id_gejala')->on('gejala');
            $table->foreign('penyakit_id')->references('id_penyakit')->on('penyakit');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gejala_penyakit');
    }
};
