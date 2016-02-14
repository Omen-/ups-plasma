<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPresentationPageAlias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      $local = new \App\Models\Pages\Page(["title" => "Présentation", "content"]);
      $local->save();

      (new \App\Models\Pages\Alias(["alias" => "presentation", "page_id" => $local->id]))->save();
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
