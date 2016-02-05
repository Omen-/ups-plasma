<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLegalAlias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      $local = new \App\Models\Pages\Page(["title" => "Mentions légales", "content"]);
      $local->save();

      (new \App\Models\Pages\Alias(["alias" => "legal", "page_id" => $local->id]))->save();
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
