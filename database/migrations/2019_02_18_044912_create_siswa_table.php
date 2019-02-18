<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswaTable extends Migration
{

    public function up()
    {
        Schema::create('siswa', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('nis');
            $table->string('nama_lengkap', 150);
            $table->string('jenis_kelamin', 15);
            $table->string('alamat', 150);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('siswa');
    }
}
