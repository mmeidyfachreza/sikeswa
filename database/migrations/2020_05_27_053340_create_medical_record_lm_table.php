<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalRecordLmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_record_lm', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('medical_record_id')->unsigned();
            $table->foreign('medical_record_id')->references('id')->on('medical_records')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('learning_modalities_id')->unsigned();
            $table->foreign('learning_modalities_id')->references('id')->on('learning_modalities')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::table('medical_record_lm', function (Blueprint $table) {
            $table->dropForeign(['medical_record_id']);
            $table->dropForeign(['learning_modalities_id']);
        });
        Schema::dropIfExists('medical_record_lm');
    }
}
