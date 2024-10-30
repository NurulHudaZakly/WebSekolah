<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    use HasFactory;

    protected $table = 'daftar';

    protected $fillable = [
        'nama',
        'ttl',
        'jenis_kelamin',
        'nik',
        'akta_lahir',
        'agama',
        'alamat',
        'nama_ayah',
        'status_ayah',
        'telp_ayah',
        'pekerjaan_ayah',
        'alamat_ayah',
        'nama_ibu',
        'status_ibu',
        'telp_ibu',
        'pekerjaan_ibu',
        'alamat_ibu',
        'nama_wali',
        'status_wali',
        'telp_wali',
        'pekerjaan_wali',
        'alamat_wali'
    ];
}
