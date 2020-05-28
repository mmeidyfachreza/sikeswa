<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',50);
            $table->string('email',191)->unique();
            $table->string('phone_number',15);
            $table->string('avatar')->default('default.jpg');
            $table->bigInteger('category_user_id')->unsigned()->nullable();
            $table->foreign('category_user_id')->references('id')->on('category_users')->onDelete('cascade');
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            // $table->rememberToken();
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['category_user_id']);
        });
        Schema::dropIfExists('users');
    }
}
