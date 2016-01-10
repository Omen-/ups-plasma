<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAliasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('alias', function (Blueprint $table)
      {
          $table->increments('id');
          $table->string('alias');
          $table->integer('page_id')->unsigned();
          $table->foreign('page_id')->references('id')->on('pages');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('alias');
    }
}
