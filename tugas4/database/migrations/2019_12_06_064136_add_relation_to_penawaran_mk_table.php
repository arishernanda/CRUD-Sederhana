<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationToPenawaranMkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('penawaran_mks', function (Blueprint $table) {
            $table->foreign('id_prodi')->references('id')->on('prodis');
            $table->foreign('id_matakuliah')->references('id')->on('matakuliahs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('penawaran_mks', function (Blueprint $table) {
            //
        });
    }
}
