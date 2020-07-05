<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalRecordHsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_record_hs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('medical_record_id')->unsigned();
            $table->foreign('medical_record_id')->references('id')->on('medical_records')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('health_screening_id')->unsigned();
            $table->foreign('health_screening_id')->references('id')->on('health_screenings')->onUpdate('cascade')->onDelete('cascade');
            $table->string('choice',15)->nullable();
            $table->string('description',200)->nullable();
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
        Schema::table('medical_record_hs', function (Blueprint $table) {
            $table->dropForeign(['medical_record_id']);
            $table->dropForeign(['health_screening_id']);
        });
        Schema::dropIfExists('medical_record_hs');
    }
}
