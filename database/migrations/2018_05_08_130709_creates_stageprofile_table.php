<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatesStageprofileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stageprofile', function (Blueprint $table) {
            $table->increments('id');
            $table->string('stagename');
            $table->string('email');
            $table->integer('phonenumber');
            $table->string('location');
            $table->string('profilepic');
            $table->string('bannerpic');
            $table->string('bannerpic');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('stageprofile');
    }
}
