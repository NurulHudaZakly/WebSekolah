<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarTable extends Migration
{
    public function up()
    {
        Schema::create('daftar', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('ttl');
            $table->string('jenis_kelamin');
            $table->string('nik');
            $table->string('akta_lahir');
            $table->string('agama');
            $table->text('alamat');

            // Data Ayah
            $table->string('nama_ayah')->nullable();
            $table->string('status_ayah')->nullable();
            $table->string('telp_ayah')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->text('alamat_ayah')->nullable();

            // Data Ibu
            $table->string('nama_ibu')->nullable();
            $table->string('status_ibu')->nullable();
            $table->string('telp_ibu')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->text('alamat_ibu')->nullable();

            // Data Wali
            $table->string('nama_wali')->nullable();
            $table->string('status_wali')->nullable();
            $table->string('telp_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->text('alamat_wali')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('daftar');
    }
}
