<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('training', function (Blueprint $table)
      {
          $table->increments('id');
          $table->string('title');
          $table->string('calendar_id');
      });

      Schema::create('users_training_rel', function (Blueprint $table)
      {
          $table->integer('user_id')->unsigned();
          $table->integer('training_id')->unsigned();
          $table->foreign('user_id')->references('id')->on('users');
          $table->foreign('training_id')->references('id')->on('training');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('training');
        Schema::drop('users_training_rel');
    }
}
