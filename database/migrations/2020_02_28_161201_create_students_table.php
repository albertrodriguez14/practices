<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('dni_id')->unsigned();
            $table->string('dni_number');
            $table->string('name');
            $table->string('last_name');
            $table->year('birday');
            $table->string('addres');
            $table->string('phone');
            $table->string('email');
            $table->string('eps');
            $table->unsignedBigInteger('contact_id')->unsigned();
             

            $table->foreign('dni_id')->references('id')->on('dnis')->onDelete('cascade');
            $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');





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
