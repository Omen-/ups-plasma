<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('news', function (Blueprint $table)
      {
          $table->increments('id');
          $table->integer('author_id')->unsigned();
          $table->foreign('author_id')->references('id')->on('users');
          $table->string('title');
          $table->string('image');
          $table->string('content');
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
        //
    }
}
