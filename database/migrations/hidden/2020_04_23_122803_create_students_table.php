<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nis',50);
            $table->string('name',50);
            $table->string('born_city',50);
            $table->string('address',150);
            $table->date('born_date');
            $table->enum('gender',['Laki-laki','Perempuan']);
            $table->string('blood_type',10);
            $table->string('school_from',150);
            $table->bigInteger('classroom_id')->unsigned()->nullable();
            $table->foreign('classroom_id')->references('id')->on('classrooms')->onDelete('cascade');
            $table->string('father_name',50);
            $table->string('mother_name',50);
            $table->string('guardian',50)->nullable();
            $table->string('no_bpjs',50)->nullable();
            $table->string('faskes_bpjs',100)->nullable();
            $table->string('avatar')->default('default.jpg');
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
        Schema::table('students', function (Blueprint $table) {
            $table->dropForeign(['classroom_id']);
        });
        Schema::dropIfExists('students');
    }
}
