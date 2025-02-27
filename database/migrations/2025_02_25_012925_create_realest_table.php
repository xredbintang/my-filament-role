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
        Schema::create('ekstra-wajib', function (Blueprint $table) {
            $table->id();
            $table->string('ekstra-nama');
            $table->string('ekstra-judul');
            $table->string('ekstra-gambar');
            $table->text('ekstra-deskripsi');
            $table->timestamps();
        });
        Schema::create('ekstra-pilihan', function (Blueprint $table) {
            $table->id();
            $table->string('ekstra-nama');
            $table->string('ekstra-judul');
            $table->string('ekstra-gambar');
            $table->text('ekstra-deskripsi');
            $table->timestamps();
        });
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->id();
            $table->string('kegiatan-nama');
            $table->string('kegiatan-gambar');
            $table->text('kegiatan-deskripsi');
            $table->timestamps();
        });
        Schema::create('fasilitas', function (Blueprint $table) {
            $table->id();
            $table->string('fasilitas-nama');
            $table->string('fasilitas-gambar');
            $table->timestamps();
        });
        Schema::create('data-siswa', function (Blueprint $table) {
            $table->id();
            $table->string('data-kelas');
            $table->string('files');
            $table->timestamps();
        });
        Schema::create('akun-siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nis');
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tentang_kami');
        Schema::dropIfExists('kategori_berita');
        Schema::dropIfExists('berita');
        Schema::dropIfExists('guru');
        Schema::dropIfExists('prestasi');
        Schema::dropIfExists('agenda');
        Schema::dropIfExists('ekstra-wajib');
        Schema::dropIfExists('ekstra-pilihan');
        Schema::dropIfExists('kegiatan');
        Schema::dropIfExists('fasilitas');
        Schema::dropIfExists('data-siswa');
        Schema::dropIfExists('akun-siswa');
    }
};
