@extends('layout')

@section('content')
    <div class="container">
        <h1>Visi dan Misi Sekolah</h1>

        @if (session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif

        @if ($visiMisi)
            <h2>Visi</h2>
            <p>{{ $visiMisi->visi }}</p>
            <h2>Misi</h2>
            <p>{{ $visiMisi->misi }}</p>
            <a href="{{ route('visimisi.edit', $visiMisi) }}">Edit</a>
        @else
            <a href="{{ route('visimisi.create') }}">Tambah Visi Misi</a>
        @endif
    </div>
@endsection
