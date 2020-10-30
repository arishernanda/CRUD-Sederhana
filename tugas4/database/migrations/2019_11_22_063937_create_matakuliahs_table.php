<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatakuliahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matakuliahs', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('kode_mk');
            $table->string('nama_mk');
            $table->integer('sks');
            $table->integer('semester');
            $table->integer('id_kurikulum')->unsigned();
            $table->integer('id_dosen')->unsigned();
            $table->integer('id_prodi')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matakuliahs');
    }
}
