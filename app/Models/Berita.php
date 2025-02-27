<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'berita'; 
    protected $fillable = ['berita-judul', 'berita-kategori', 'berita-tanggal', 'berita-gambar', 'berita-deskripsi']; // Kolom yang bisa diisi

    public function kategori()
    {
        return $this->belongsTo(KategoriBerita::class, 'berita-kategori');
    }
}