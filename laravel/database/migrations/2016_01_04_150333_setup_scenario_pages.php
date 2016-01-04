<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SetupScenarioPages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        (new \App\Models\Pages\Page(["title" => "Plasma ?", "content" => ""]))->save();
        (new \App\Models\Pages\Page(["title" => "Applications et Débouchés ?", "content" => ""]))->save();
        (new \App\Models\Pages\Page(["title" => "Parcours international", "content" => ""]))->save();
        (new \App\Models\Pages\Page(["title" => "Parcours local", "content" => ""]))->save();
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
