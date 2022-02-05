<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupervisorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supervisors', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('role',100);
            $table->string('email',100);
            $table->string('contactno',13);
            $table->string('profile',100);
            $table->string('pincode',6);
            $table->string('address',100);
            $table->string('qualification',100);
            $table->string('password',70);
            $table->string('is_del',50);
            $table->string('status',50);
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
        Schema::dropIfExists('supervisors');
    }
}
