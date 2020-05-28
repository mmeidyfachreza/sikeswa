<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalRecordMhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_record_mh', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('medical_record_id')->unsigned();
            $table->foreign('medical_record_id')->references('id')->on('medical_records')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('mental_health_id')->unsigned();
            $table->foreign('mental_health_id')->references('id')->on('mental_healths')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('score');
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
        Schema::table('medical_record_mh', function (Blueprint $table) {
            $table->dropForeign(['medical_record_id']);
            $table->dropForeign(['mental_health_id']);
        });
        Schema::dropIfExists('medical_record_mh');
    }
}
