<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStuffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stuffs', function (Blueprint $table) {
            $table->Integer('stuff_id')->unsigned();
            $table->foreign('stuff_id')->references('id')->on('users');
            $table->string('full_name');
            $table->date('birthdate');
            $table->string('email');
            $table->string('password');
            $table->string('address');
            $table->string('gender');
            $table->BigInteger('phone');
            $table->Integer('salary');
            $table->date('hire_date');
            $table->String('work_type');
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
        Schema::dropIfExists('stuffs');
    }
}
