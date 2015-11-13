<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('news_category', function (Blueprint $table)
      {
          $table->increments('id');
          $table->string('title');
          $table->string('color');
      });

      Schema::create('news_category_rel', function (Blueprint $table)
      {
          $table->integer('news_id')->unsigned();
          $table->integer('category_id')->unsigned();
          $table->foreign('news_id')->references('id')->on('news');
          $table->foreign('category_id')->references('id')->on('news_category');
      });

      $newsCategory = new \App\Models\News\Category(["title" => "news", "color" => "green"]);
      $newsCategory->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('news_category');
        Schema::drop('news_category_rel');
    }
}
