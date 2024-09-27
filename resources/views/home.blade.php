@extends('layout')

@section('content')
    <div class="container">
        <h1>Selamat Datang di Sekolah Kami!</h1>
        <p>Ini adalah halaman home untuk sekolah.</p>
        <a href="{{ route('siswa.index') }}">Lihat Data Siswa</a>
        <a href="{{ route('visimisi.index') }}">Lihat Visi Misi</a>
        <a href="{{ route('guru.index') }}">Lihat Data Guru</a>
    </div>
@endsection
