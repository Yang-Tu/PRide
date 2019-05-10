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
            $table->string('fname');
            $table->string('lname');
            $table->integer('class_year');
            $table->integer('phone');
            $table->string('email');
            $table->string('zipcode');
            $table->string('airport');
            $table->string('d_date');
            $table->time('d_time');
            $table->integer('seats');
            $table->string('password');
            $table->string('pref_service');
            $table->string('eating_club');
            $table->integer('group');
            $table->integer('spaces_left');
            $table->string('updated_at');
            $table->string('created_at');

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
