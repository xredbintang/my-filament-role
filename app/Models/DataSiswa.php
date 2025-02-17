<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSiswa extends Model
{
    use HasFactory;
    protected $table = 'datasiswa';
    protected $fillable = ['nama_kelas', 'files'];

    protected $casts = [
        'files' => 'array',
    ];
}
