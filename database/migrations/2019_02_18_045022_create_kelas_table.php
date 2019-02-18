<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKelasTable extends Migration
{

    public function up()
    {
        Schema::create('kelas', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kelas', 150);
            $table->string('jurusan', 150);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('kelas');
    }
}
