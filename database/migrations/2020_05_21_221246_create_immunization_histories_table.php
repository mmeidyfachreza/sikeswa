<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImmunizationHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('immunization_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->string('student_nis');
            $table->foreign('student_nis')->references('nis')->on('students')->onDelete('cascade');
            $table->integer('age_year');
            $table->integer('age_month');
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
        Schema::table('immunization_histories', function (Blueprint $table) {
            $table->dropForeign(['student_nis']);
        });
        Schema::dropIfExists('immunization_histories');
    }
}
