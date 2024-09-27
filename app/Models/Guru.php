<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',    // Gantilah dengan nama kolom yang sesuai
        'email',   // Gantilah dengan nama kolom yang sesuai
        'mata_pelajaran', // Gantilah dengan nama kolom yang sesuai
        // Tambahkan atribut lain yang ingin disimpan di sini
    ];
}
