<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    public function index()
    {
        $visiMisi = VisiMisi::first(); // Mengambil satu data Visi Misi
        return view('visimisi.index', compact('visiMisi'));
    }

    public function create()
    {
        return view('visimisi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'visi' => 'required',
            'misi' => 'required',
        ]);

        VisiMisi::create($request->all());
        return redirect()->route('visimisi.index')->with('success', 'Visi Misi berhasil ditambahkan.');
    }

    public function edit(VisiMisi $visiMisi)
    {
        return view('visimisi.edit', compact('visiMisi'));
    }



    public function update(Request $request, VisiMisi $visiMisi)
    {
        $request->validate([
            'visi' => 'required',
            'misi' => 'required',
        ]);

        $visiMisi->update($request->all());
        return redirect()->route('visimisi.index')->with('success', 'Visi Misi berhasil diperbarui.');
    }


    public function destroy(VisiMisi $visiMisi)
    {
        $visiMisi->delete();
        return redirect()->route('visimisi.index')->with('success', 'Visi Misi berhasil dihapus.');
    }
}
