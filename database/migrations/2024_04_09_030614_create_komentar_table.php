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
        Schema::create('komentar', function (Blueprint $table) {
            $table->increments('id_komentar');
            $table->date('tgl_komentar')->nullable();
            $table->text('komentar')->nullable();
            $table->unsignedBigInteger('users_id');
            $table->unsignedInteger('postingan_id');

            $table->foreign('postingan_id')->references('id_postingan')->on('postingan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komentar');
    }
};
