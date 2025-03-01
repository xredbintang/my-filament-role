<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EkstraPilihan extends Model
{
    use HasFactory;

    protected $table = 'ekstra_pilihan'; 
    protected $fillable = ['ekstra_nama', 'ekstra_judul', 'ekstra_gambar', 'ekstra_deskripsi'];
}