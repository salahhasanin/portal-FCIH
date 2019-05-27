<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->Integer('stu_id')->unsigned();
            $table->foreign('stu_id')->references('id')->on('users');
            $table->string('full_name');
            $table->date('birthdate');
            $table->string('email');
            $table->string('password');
            $table->string('address');
            $table->string('gender');
            $table->BigInteger('phone');
            $table->Integer('GPA');
            $table->Integer('Credit_hours');
            $table->date('start_date');
            $table->String('transcript');
            $table->Integer('payment');
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
        Schema::dropIfExists('students');
    }
}
