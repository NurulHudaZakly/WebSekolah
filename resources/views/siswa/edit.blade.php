@extends('layout')

@section('content')
    <h1>Edit Siswa</h1>
    <form action="{{ route('siswa.update', $siswa) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" name="nama" value="{{ $siswa->nama }}" required>
        </div>
        <div class="form-group">
            <label for="kelas">Kelas:</label>
            <input type="text" class="form-control" name="kelas" value="{{ $siswa->kelas }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
@endsection
