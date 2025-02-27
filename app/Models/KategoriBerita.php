<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBerita extends Model
{
    use HasFactory;

    protected $table = 'kategori-berita'; 
    protected $fillable = ['kategori-nama']; 

    public function berita()
    {
        return $this->hasMany(Berita::class, 'berita-kategori');
    }
}
