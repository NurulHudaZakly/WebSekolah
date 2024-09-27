@extends('layout')

@section('content')
    <h1>Tambah Siswa</h1>
    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" name="nama" required>
        </div>
        <div class="form-group">
            <label for="kelas">Kelas:</label>
            <input type="text" class="form-control" name="kelas" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
@endsection
