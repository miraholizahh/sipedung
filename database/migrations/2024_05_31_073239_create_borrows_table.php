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
        Schema::create('borrows', function (Blueprint $table) {
            $table->id();
            $table->string('instansi', 255);
            $table->string('nama_gedung', 255);
            $table->string('agenda', 255);
            $table->date('tanggal_peminjaman');
            $table->time('waktu_peminjaman');
            $table->integer('jumlah_peserta');
            $table->boolean('status')->default(false);
            $table->string('file_path')->nullable();
            // $table->bigInteger('user_id');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrows');
    }
};
