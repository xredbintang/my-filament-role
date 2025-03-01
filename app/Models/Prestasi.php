<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    use HasFactory;

    protected $table = 'prestasi'; 
    protected $fillable = ['prestasi_nama', 'prestasi_gambar', 'prestasi_deskripsi'];
}