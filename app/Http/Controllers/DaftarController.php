<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Daftar;

class DaftarController extends Controller
{
    public function create()
    {
        return view('daftar');
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'nama' => 'required|string|max:255',
            'ttl' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'nik' => 'required|string|max:16',
            'akta_lahir' => 'required|string',
            'agama' => 'required|string',
            'alamat' => 'required|string',

            'nama_ayah' => 'nullable|string',
            'status_ayah' => 'nullable|string',
            'telp_ayah' => 'nullable|string',
            'pekerjaan_ayah' => 'nullable|string',
            'alamat_ayah' => 'nullable|string',

            'nama_ibu' => 'nullable|string',
            'status_ibu' => 'nullable|string',
            'telp_ibu' => 'nullable|string',
            'pekerjaan_ibu' => 'nullable|string',
            'alamat_ibu' => 'nullable|string',

            'nama_wali' => 'nullable|string',
            'status_wali' => 'nullable|string',
            'telp_wali' => 'nullable|string',
            'pekerjaan_wali' => 'nullable|string',
            'alamat_wali' => 'nullable|string',
        ]);

        // Simpan data ke database
        Daftar::create($request->all());

        // Redirect ke halaman sukses atau menampilkan pesan sukses
        return redirect()->back()->with('success', 'Pendaftaran berhasil disimpan');
    }
}
