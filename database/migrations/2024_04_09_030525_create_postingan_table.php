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
        Schema::create('postingan', function (Blueprint $table) {
            $table->increments('id_postingan');
            $table->string('judul_postingan')->nullable();
            $table->text('deskripsi')->nullable();
            $table->date('tgl_upload');
            $table->text('gambar_postingan');
            $table->smallInteger('active_nonactive');
            $table->unsignedBigInteger('users_id');

            $table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postingan');
    }
};
