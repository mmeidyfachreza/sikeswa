<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalRecordMh2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_record_mh2', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('medical_record_id')->unsigned();
            $table->foreign('medical_record_id')->references('id')->on('medical_records')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('mental_healths2_id')->unsigned();
            $table->foreign('mental_healths2_id')->references('id')->on('mental_healths2')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('score')->nullable();
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
        Schema::table('medical_record_mh2', function (Blueprint $table) {
            $table->dropForeign(['medical_record_id']);
            $table->dropForeign(['mental_healths2_id']);
        });
        Schema::dropIfExists('medical_record_mh2');
    }
}
