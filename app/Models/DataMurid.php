<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataMurid extends Model
{
    use HasFactory;
    protected $table = 'data_murid';
    protected $fillable = ['data_kelas','data_files'];
    protected $casts = [
        'data_files' => 'array',
    ];
}
