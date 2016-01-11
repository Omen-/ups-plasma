<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Training;
use App\Models\Users\Role;

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
      $admin->roles()->save(Role::find(1));

      $student = new \App\Models\Users\User(["email" => "student@test.com", "password" => bcrypt("student")]);
      $student->save();
      $student->roles()->save(Role::find(2));
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
