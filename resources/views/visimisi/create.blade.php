@extends('layout')

@section('content')
    <h1>Tambah Visi Misi</h1>
    <form action="{{ route('visimisi.store') }}" method="POST">
        @csrf
        <label for="visi">Visi:</label>
        <input type="text" name="visi" required>
        <label for="misi">Misi:</label>
        <input type="text" name="misi" required>
        <button type="submit">Simpan</button>
    </form>
@endsection
