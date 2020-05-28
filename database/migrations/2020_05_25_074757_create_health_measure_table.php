<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHealthMeasureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_measurement', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('health_id')->unsigned();
            $table->foreign('health_id')->references('id')->on('healths')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('measurement_id')->unsigned();
            $table->foreign('measurement_id')->references('id')->on('measurements')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::table('health_measurement', function (Blueprint $table) {
            $table->dropForeign(['measurement_id']);
            $table->dropForeign(['health_id']);
        });
        Schema::dropIfExists('health_measurement');
    }
}
