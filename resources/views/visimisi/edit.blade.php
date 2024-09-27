@extends('layout')

@section('content')
    <h1>Edit Visi Misi</h1>
    <form action="{{ route('visimisi.update', $visiMisi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="visi">Visi:</label>
        <input type="text" name="visi" value="{{ $visiMisi->visi }}" required>
        <label for="misi">Misi:</label>
        <input type="text" name="misi" value="{{ $visiMisi->misi }}" required>
        <button type="submit">Perbarui</button>
    </form>
@endsection
