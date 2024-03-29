<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstructorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructors', function (Blueprint $table) {
            $table->Integer('inst_id')->unsigned();
            $table->foreign('inst_id')->references('id')->on('users');
            $table->string('full_name');
            $table->date('birthdate');
            $table->string('email');
            $table->string('password');
            $table->string('address');
            $table->string('gender');
            $table->BigInteger('phone');
            $table->Integer('salary');
            $table->date('hire_date');
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
        Schema::dropIfExists('instructors');
    }
}
