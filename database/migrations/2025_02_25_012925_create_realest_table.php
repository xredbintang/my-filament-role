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
        Schema::create('tentang-kami', function (Blueprint $table) {
            $table->id();
            $table->string('gambar');
            $table->text('deskripsi');
            $table->timestamps();
        });
        Schema::create('kategori-berita', function (Blueprint $table) {
            $table->id();
            $table->string('kategori-nama');
            $table->timestamps();
        });
        Schema::create('berita', function (Blueprint $table) {
            $table->id();
            $table->string('berita-judul');
            $table->foreignId('berita-kategori')->constrained('kategori-berita','id');
            $table->date('berita-tanggal');
            $table->string('berita-gambar');
            $table->text('berita-deskripsi');
            $table->timestamps();
        });
        Schema::create('guru', function (Blueprint $table) {
            $table->id();
            $table->string('guru-nama');
            $table->string('guru-gambar');
            $table->string('guru-jabatan');
            $table->timestamps();
        });
        Schema::create('prestasi', function (Blueprint $table) {
            $table->id();
            $table->string('prestasi-nama');
            $table->string('prestasi-gambar');
            $table->string('prestasi-deskripsi');
            $table->timestamps();
        });
        Schema::create('agenda', function (Blueprint $table) {
            $table->id();
            $table->text('semester-pertama');
            $table->text('semester-kedua');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('realest');
    }
};
