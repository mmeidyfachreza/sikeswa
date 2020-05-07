<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHealthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('healths', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->bigInteger('student_id')->unsigned()->nullable();
            // $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->date('date');
            $table->double('heigt');
            $table->double('weight');
            $table->double('bmi');
            $table->integer('age');

            $table->string('tooth_cond',10);
            $table->string('hair_cond',10);
            $table->string('nail_cond',10);
            $table->string('ear_cond',10);
            $table->string('skin_cond',50);

            $table->string('height_stat',25);
            $table->string('weight_stat',25);
            $table->string('bmi_stat',25);
            $table->string('tooth_stat',15);
            $table->string('hair_stat',15);
            $table->string('nail_stat',15);
            $table->string('ear_stat',15);
            $table->string('skin_stat',15);
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
        Schema::table('healths', function (Blueprint $table) {

        });
        Schema::dropIfExists('healths');
    }
}
