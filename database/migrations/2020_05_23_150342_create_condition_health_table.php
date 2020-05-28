<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConditionHealthTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condition_health', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('health_id')->unsigned();
            $table->foreign('health_id')->references('id')->on('healths')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('condition_id')->unsigned();
            $table->foreign('condition_id')->references('id')->on('conditions')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::table('condition_health', function (Blueprint $table) {
            $table->dropForeign(['condition_id']);
            $table->dropForeign(['health_id']);
        });
        Schema::dropIfExists('condition_health');
    }
}
