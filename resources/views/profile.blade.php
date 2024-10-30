@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <!-- Bagian kiri: Foto Profil dan Informasi Umum -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <!-- Foto Profil -->
                        <img src="{{ asset('AdminLTE/dist/img/icons.png') }}" alt="Foto Profil"
                            class="img-fluid rounded-circle" style="width: 150px;">
                        <h3 class="mt-3">Nama Pengguna</h3>
                        <p class="text-muted">Pengguna Sekolah</p>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-body">
                        <h5>Informasi Umum</h5>
                        <p><strong>Email:</strong> pengguna@sekolah.com</p>
                        <p><strong>No. Telepon:</strong> 08123456789</p>
                        <p><strong>Jenis Kelamin:</strong> Laki-laki</p>
                        <p><strong>Tanggal Lahir:</strong> 1 Januari 2000</p>
                    </div>
                </div>
            </div>

            <!-- Bagian kanan: Postingan atau Informasi Tambahan -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h4>Aktivitas Terbaru</h4>
                        <p>Belum ada aktivitas terbaru.</p>
                    </div>
                </div>

                <!-- Tambahkan Postingan atau Info Tambahan -->
                <div class="card mt-3">
                    <div class="card-body">
                        <h4>Informasi Tambahan</h4>
                        <p>Ini adalah tempat untuk menambahkan informasi tambahan atau postingan terbaru dari pengguna.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
