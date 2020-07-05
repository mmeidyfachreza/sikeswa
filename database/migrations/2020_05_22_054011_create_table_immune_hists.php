<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableImmuneHists extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('immune_hists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('immunization_id')->unsigned();
            $table->foreign('immunization_id')->references('id')->on('immunizations')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('immunization_histories_id')->unsigned();
            $table->foreign('immunization_histories_id')->references('id')->on('immunization_histories')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('status',[1,0])->nullable();
            $table->string('description',100);
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
        Schema::table('immune_hists', function (Blueprint $table) {
            $table->dropForeign(['immunization_histories_id']);
            $table->dropForeign(['immunization_id']);
        });
        Schema::dropIfExists('immune_hists');
    }
}
