@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="form-container p-4" style="border-radius: 15px; background-color: white;">
                    <h1 class="text-center">Isi Biodata</h1>
                    <hr>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('daftar.store') }}">
                        @csrf
                        <h5>DATA SISWA</h5>
                        <div class="mb-3">
                            <label>Nama calon peserta didik:</label>
                            <input type="text" name="nama" class="form-control" style="background-color:  #ebebeb;">
                        </div>
                        <div class="mb-3">
                            <label>Tempat dan tanggal lahir:</label>
                            <input type="text" name="ttl" class="form-control" style="background-color: #ebebeb;">
                        </div>
                        <div class="mb-3">
                            <label>Jenis kelamin:</label>
                            <select name="jenis_kelamin" class="form-control" style="background-color: #ebebeb;">
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>NIK:</label>
                            <input type="text" name="nik" class="form-control" style="background-color: #ebebeb;">
                        </div>
                        <div class="mb-3">
                            <label>Nomor akta lahir:</label>
                            <input type="text" name="akta_lahir" class="form-control" style="background-color: #ebebeb;">
                        </div>
                        <div class="mb-3">
                            <label>Agama:</label>
                            <input type="text" name="agama" class="form-control" style="background-color: #ebebeb;">
                        </div>
                        <div class="mb-3">
                            <label>Alamat:</label>
                            <input type="text" name="alamat" class="form-control" style="background-color: #ebebeb;">
                        </div>
                        <hr>
                        <h5>Data Orang Tua/Wali</h5>
                        <div class="mb-3">
                            <label>Nama Ayah:</label>
                            <input type="text" name="nama_ayah" class="form-control" style="background-color: #ebebeb;">
                        </div>
                        <div class="mb-3">
                            <label>Status Ayah:</label>
                            <select name="status_ayah" class="form-control" style="background-color: #ebebeb;">
                                <option value="hidup">Hidup</option>
                                <option value="meninggal">Meninggal</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>No Telp Ayah:</label>
                            <input type="text" name="telp_ayah" class="form-control" style="background-color: #ebebeb;">
                        </div>
                        <div class="mb-3">
                            <label>Pekerjaan Ayah:</label>
                            <input type="text" name="pekerjaan_ayah" class="form-control"
                                style="background-color: #ebebeb;">
                        </div>
                        <div class="mb-3">
                            <label>Alamat Ayah:</label>
                            <input type="text" name="alamat_ayah" class="form-control"
                                style="background-color: #ebebeb;">
                        </div>
                        <hr>
                        <div class="mb-3">
                            <label>Nama Ibu:</label>
                            <input type="text" name="nama_ibu" class="form-control" style="background-color: #ebebeb;">
                        </div>
                        <div class="mb-3">
                            <label>Status Ibu:</label>
                            <select name="status_ibu" class="form-control" style="background-color: #ebebeb;">
                                <option value="hidup">Hidup</option>
                                <option value="meninggal">Meninggal</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>No Telp Ibu:</label>
                            <input type="text" name="telp_ibu" class="form-control" style="background-color: #ebebeb;">
                        </div>
                        <div class="mb-3">
                            <label>Pekerjaan Ibu:</label>
                            <input type="text" name="pekerjaan_ibu" class="form-control"
                                style="background-color: #ebebeb;">
                        </div>
                        <div class="mb-3">
                            <label>Alamat Ibu:</label>
                            <input type="text" name="alamat_ibu" class="form-control" style="background-color: #ebebeb;">
                        </div>
                        <hr>
                        <div class="mb-3">
                            <label>Nama Wali (opsional):</label>
                            <input type="text" name="nama_wali" class="form-control"
                                style="background-color: #ebebeb;">
                        </div>
                        <div class="mb-3">
                            <label>Status Wali (opsional):</label>
                            <select name="status_wali" class="form-control" style="background-color: #ebebeb;">
                                <option value="hidup">Hidup</option>
                                <option value="meninggal">Meninggal</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>No Telp Wali (opsional):</label>
                            <input type="text" name="telp_wali" class="form-control"
                                style="background-color: #ebebeb;">
                        </div>
                        <div class="mb-3">
                            <label>Pekerjaan Wali (opsional):</label>
                            <input type="text" name="pekerjaan_wali" class="form-control"
                                style="background-color: #ebebeb;">
                        </div>
                        <div class="mb-3">
                            <label>Alamat Wali (opsional):</label>
                            <input type="text" name="alamat_wali" class="form-control"
                                style="background-color: #ebebeb;">
                        </div>
                        <hr>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary"
                                style="background-color: #15123c; border-color: #15123c;">Simpan</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
