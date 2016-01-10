<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SetupDefaultPages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $local = new \App\Models\Pages\Page(["title" => "Présentation local", "content"]);
        $international = new \App\Models\Pages\Page(["title" => "Présentation international", "content"]);
        $plasma = new \App\Models\Pages\Page(["title" => "Présentation plasma", "content"]);
        $debouches = new \App\Models\Pages\Page(["title" => "Présentation débouchés", "content"]);

        $local->save();
        $international->save();
        $plasma->save();
        $debouches->save();

        (new \App\Models\Pages\Alias(["alias" => "presentation-local", "page_id" => $local->id]))->save();
        (new \App\Models\Pages\Alias(["alias" => "presentation-international", "page_id" => $international->id]))->save();
        (new \App\Models\Pages\Alias(["alias" => "plasma", "page_id" => $plasma->id]))->save();
        (new \App\Models\Pages\Alias(["alias" => "debouches", "page_id" => $debouches->id]))->save();
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
