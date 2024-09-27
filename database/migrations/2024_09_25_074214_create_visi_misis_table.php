<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisiMisisTable extends Migration
{
    public function up()
    {
        Schema::create('visi_misis', function (Blueprint $table) {
            $table->id();
            $table->string('visi');
            $table->string('misi');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('visi_misis');
    }
}
