<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('healths', function (Blueprint $table) {
            $table->bigInteger('student_id')->unsigned()->nullable()->after('id');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
        });

        Schema::table('students', function (Blueprint $table) {
            $table->bigInteger('classroom_id')->unsigned()->nullable()->after('school_from');
            $table->foreign('classroom_id')->references('id')->on('classrooms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('healths', function (Blueprint $table) {
            $table->dropForeign(['student_id']);
        });
        Schema::table('students', function (Blueprint $table) {
            $table->dropForeign(['classroom_id']);
        });
    }
}
