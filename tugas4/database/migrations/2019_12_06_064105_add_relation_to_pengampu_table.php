<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationToPengampuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pengampus', function (Blueprint $table) {
            $table->foreign('id_penawaran_mk')->references('id')->on('penawaran_mks');
            $table->foreign('id_dosen')->references('id')->on('dosens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pengampus', function (Blueprint $table) {
            //
        });
    }
}
