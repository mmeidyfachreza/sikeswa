<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHealth2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health2s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('student_id')->unsigned()->nullable();
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->date('date');
            $table->double('heigt');
            $table->double('weight');
            $table->double('bmi');
            $table->integer('age');

            $table->bigInteger('tooth_cond')->unsigned()->nullable();
            $table->foreign('tooth_cond')->references('id')->on('health_conditions')->onDelete('cascade');
            $table->bigInteger('hair_cond')->unsigned()->nullable();
            $table->foreign('hair_cond')->references('id')->on('health_conditions')->onDelete('cascade');
            $table->bigInteger('nail_cond')->unsigned()->nullable();
            $table->foreign('nail_cond')->references('id')->on('health_conditions')->onDelete('cascade');
            $table->bigInteger('ear_cond')->unsigned()->nullable();
            $table->foreign('ear_cond')->references('id')->on('health_conditions')->onDelete('cascade');
            $table->bigInteger('skin_cond')->unsigned()->nullable();
            $table->foreign('skin_cond')->references('id')->on('health_conditions')->onDelete('cascade');

            $table->bigInteger('height_stat')->unsigned()->nullable();
            $table->foreign('height_stat')->references('id')->on('measurements')->onDelete('cascade');
            $table->bigInteger('weight_stat')->unsigned()->nullable();
            $table->foreign('weight_stat')->references('id')->on('measurements')->onDelete('cascade');
            $table->bigInteger('bmi_stat')->unsigned()->nullable();
            $table->foreign('bmi_stat')->references('id')->on('measurements')->onDelete('cascade');

            $table->bigInteger('tooth_stat')->unsigned()->nullable();
            $table->foreign('tooth_stat')->references('id')->on('health_outcomes')->onDelete('cascade');
            $table->bigInteger('hair_stat')->unsigned()->nullable();
            $table->foreign('hair_stat')->references('id')->on('health_outcomes')->onDelete('cascade');
            $table->bigInteger('nail_stat')->unsigned()->nullable();
            $table->foreign('nail_stat')->references('id')->on('health_outcomes')->onDelete('cascade');
            $table->bigInteger('ear_stat')->unsigned()->nullable();
            $table->foreign('ear_stat')->references('id')->on('health_outcomes')->onDelete('cascade');
            $table->bigInteger('skin_stat')->unsigned()->nullable();
            $table->foreign('skin_stat')->references('id')->on('health_outcomes')->onDelete('cascade');
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
        Schema::dropIfExists('health2s');
    }
}
