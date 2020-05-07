<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHealthOutcomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_outcomes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('description');
            $table->enum('type',[
                'gigi',
                'rambut',
                'kuku',
                'telinga',
                'kulit'
            ]);
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
        Schema::dropIfExists('health_outcomes');
    }
}
