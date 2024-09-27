@extends('layout')

@section('content')
    <h1>Tambah Guru</h1>
    <form action="{{ route('guru.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" name="nama" required>
        </div>
        <div class="form-group">
            <label for="mata_pelajaran">Mata Pelajaran:</label>
            <input type="text" class="form-control" name="mata_pelajaran" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
@endsection
