<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('gender');
            $table->integer('age');
            $table->integer('coin');
            $table->string('hobby1');
            $table->string('hobby2');
            $table->string('hobby3');
            $table->string('instagram');
            $table->string('mobile_number');
            $table->string('language');
            $table->string('location');
            $table->string('profile_picture');
            $table->integer('register_price');
            $table->boolean('isVisible');
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
