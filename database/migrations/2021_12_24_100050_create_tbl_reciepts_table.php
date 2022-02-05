<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblRecieptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_reciepts', function (Blueprint $table) {
            $table->Increments('reciept_id');
            $table->string('patient_id',20);
            $table->string('date',15);
            $table->string('weight',50);
            $table->string('age',10);
            $table->string('suggestion',200);
            $table->boolean('is_del');
            $table->string('total',10)->null();
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
        Schema::dropIfExists('tbl_reciepts');
    }
}
