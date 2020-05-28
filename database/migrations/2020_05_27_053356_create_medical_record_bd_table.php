<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalRecordBdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_record_bd', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('medical_record_id')->unsigned();
            $table->foreign('medical_record_id')->references('id')->on('medical_records')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('brain_domination_id')->unsigned();
            $table->foreign('brain_domination_id')->references('id')->on('brain_dominations')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::table('medical_record_bd', function (Blueprint $table) {
            $table->dropForeign(['medical_record_id']);
            $table->dropForeign(['brain_domination_id']);
        });
        Schema::dropIfExists('medical_record_bd');
    }
}
