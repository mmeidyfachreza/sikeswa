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
            $table->string('nis',50)->primary();
            $table->string('name',50);
            $table->string('birth_place',50);
            $table->date('birth_date');
            $table->string('address',150);
            $table->enum('gender',['laki-laki','perempuan']);
            $table->string('school_from',150)->nullable();
            $table->string('class_year',4)->nullable();
            $table->string('classroom',20)->nullable();
            $table->string('father_name',50)->nullable();
            $table->string('mother_name',50)->nullable();
            $table->string('guardian',50)->nullable();
            $table->string('phone_number',50)->nullable();
            $table->string('blood_type',10)->nullable();
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
        Schema::dropIfExists('students');
    }
}
