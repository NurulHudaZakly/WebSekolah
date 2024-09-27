<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisiMisi extends Model
{
    use HasFactory;

    protected $fillable = [
        'visi', // Tambahkan kolom visi Anda
        'misi', // Tambahkan kolom misi Anda
    ];
}
