<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'guru'; 
    protected $fillable = ['guru-nama', 'guru-gambar', 'guru-jabatan'];
}