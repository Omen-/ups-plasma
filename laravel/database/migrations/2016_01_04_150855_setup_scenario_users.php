<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Training;
use App\Models\News\Category;

class SetupScenarioUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      $admin = new \App\Models\Users\User(["email" => "admin@test.com", "password" => bcrypt("admin")]);
      $admin->save();
      $admin->roles()->save(Category::find(1));
      $admin->trainings()->save(Training::find(1));


      $student = new \App\Models\Users\User(["email" => "student@test.com", "password" => bcrypt("student")]);
      $student->save();
      $student->roles()->save(Category::find(2));
      $student->trainings()->save(Training::find(1));
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
