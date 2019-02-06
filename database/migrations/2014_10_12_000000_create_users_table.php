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
            $table->increments('id');
            $table->string('name');
            $table->string('lastname')->nullable();
            $table->string('profilePicture')->nullable()->default('images/users/user.jpg');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('cp')->nullable();
            $table->string('city')->nullable();
            $table->string('club')->nullable();
            $table->string('activity')->nullable();
            $table->string('license')->nullable();
            $table->date('startLicense')->nullable();
            $table->date('endLicense')->nullable();
            $table->double('rate', 8, 2)->nullable();
            $table->integer('rol')->nullable()->default(3);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}