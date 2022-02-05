<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblRecieptsMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_reciepts_medicines', function (Blueprint $table) {
            $table->increments('recmed_id');
            $table->BigInteger('reciept_id');
            $table->BigInteger('id');
            $table->string('dose');
            $table->string('time');
            $table->boolean('is_del')->null(0);
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
        Schema::dropIfExists('tbl_reciepts_medicines');
    }
}
