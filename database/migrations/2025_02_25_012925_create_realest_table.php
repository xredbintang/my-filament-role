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
        Schema::create('tentang_kami', function (Blueprint $table) {
            $table->id();
            $table->string('gambar');
            $table->text('deskripsi');
            $table->timestamps();
        });
        Schema::create('kategori_berita', function (Blueprint $table) {
            $table->id();
            $table->string('kategori_nama');
            $table->timestamps();
        });
        Schema::create('berita', function (Blueprint $table) {
            $table->id();
            $table->string('berita_judul');
            $table->foreignId('berita_kategori')->constrained('kategori_berita','id');
            $table->date('berita_tanggal');
            $table->string('berita_gambar');
            $table->text('berita_deskripsi');
            $table->timestamps();
        });
        Schema::create('guru', function (Blueprint $table) {
            $table->id();
            $table->string('guru_nama');
            $table->string('guru_gambar');
            $table->string('guru_jabatan');
            $table->timestamps();
        });
        Schema::create('prestasi', function (Blueprint $table) {
            $table->id();
            $table->string('prestasi_nama');
            $table->string('prestasi_gambar');
            $table->string('prestasi_deskripsi');
            $table->timestamps();
        });
        Schema::create('agenda', function (Blueprint $table) {
            $table->id();
            $table->text('semester_pertama');
            $table->text('semester_kedua');
            $table->timestamps();
        });
        Schema::create('ekstra_wajib', function (Blueprint $table) {
            $table->id();
            $table->string('ekstra_nama');
            $table->string('ekstra_judul');
            $table->string('ekstra_gambar');
            $table->text('ekstra_deskripsi');
            $table->timestamps();
        });
        Schema::create('ekstra_pilihan', function (Blueprint $table) {
            $table->id();
            $table->string('ekstra_nama');
            $table->string('ekstra_judul');
            $table->string('ekstra_gambar');
            $table->text('ekstra_deskripsi');
            $table->timestamps();
        });
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->id();
            $table->string('kegiatan_nama');
            $table->string('kegiatan_gambar');
            $table->text('kegiatan_deskripsi');
            $table->timestamps();
        });
        Schema::create('fasilitas', function (Blueprint $table) {
            $table->id();
            $table->string('fasilitas_nama');
            $table->string('fasilitas_gambar');
            $table->timestamps();
        });
        Schema::create('data_siswa', function (Blueprint $table) {
            $table->id();
            $table->string('data_kelas');
            $table->string('files');
            $table->timestamps();
        });
        Schema::create('akun_siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nis');
            $table->string('password');
            $table->timestamps();
        });
        Schema::create('visi_misi', function (Blueprint $table) {
            $table->id();
            $table->text('visi');
            $table->text('misi');
            $table->text('tujuan');
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
        Schema::dropIfExists('ekstra_wajib');
        Schema::dropIfExists('ekstra_pilihan');
        Schema::dropIfExists('kegiatan');
        Schema::dropIfExists('fasilitas');
        Schema::dropIfExists('data_siswa');
        Schema::dropIfExists('akun_siswa');
        Schema::dropIfExists('visi_misi');
    }
};
