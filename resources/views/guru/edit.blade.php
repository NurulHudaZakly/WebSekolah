@extends('layout')

@section('content')
    <h1>Edit Guru</h1>
    <form action="{{ route('guru.update', $guru) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nama">Nama:</label>
        <input type="text" name="  nama" value="{{ $guru->nama }}" required>
        <label for="mata_pelajaran">Mata Pelajaran:</label>
        <input type="text" name="  mata_pelajaran" value="{{ $guru->mata_pelajaran }}" required>
        <button type="submit"> Perbarui</button>
    </form>
@endsection
