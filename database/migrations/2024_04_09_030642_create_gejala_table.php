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
        Schema::create('gejala', function (Blueprint $table) {
            $table->increments('id_gejala');
            $table->string('gejala', 200);
            $table->unsignedInteger('klasifikasi_gejala_id');

            $table->foreign('klasifikasi_gejala_id')->references('id_klasifikasi_gejala')->on('klasifikasi_gejala');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gejala');
    }
};
