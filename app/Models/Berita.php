<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'berita'; 
    protected $fillable = ['berita_judul', 'berita_kategori', 'berita_tanggal', 'berita_gambar', 'berita_deskripsi']; 

    public function kategori()
    {
        return $this->belongsTo(KategoriBerita::class, 'berita-kategori');
    }
}