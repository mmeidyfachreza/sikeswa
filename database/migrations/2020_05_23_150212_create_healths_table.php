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
            $table->date('date');
            $table->string('student_nis')->nullable();
            $table->foreign('student_nis')->references('nis')->on('students')->onDelete('cascade');
            $table->integer('age_year')->nullable();
            $table->integer('age_month');
            $table->double('height');
            $table->double('weight');
            $table->double('bmi');
            $table->string('comment')->nullable();
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
            $table->dropForeign(['student_nis']);
        });
        Schema::dropIfExists('healths');
    }
}
