<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('users_roles', function (Blueprint $table)
      {
          $table->increments('id');
          $table->string('title');
      });

      Schema::create('users_roles_rel', function (Blueprint $table)
      {
          $table->integer('user_id')->unsigned();
          $table->integer('role_id')->unsigned();
          $table->foreign('user_id')->references('id')->on('users');
          $table->foreign('role_id')->references('id')->on('users_roles');
      });

      $adminRole = new \App\Models\Users\Role(["title" => "admin"]);
      $adminRole->save();

      $studentRole = new \App\Models\Users\Role(["title" => "student"]);
      $studentRole->save();

      $redactorRole = new \App\Models\Users\Role(["title" => "redactor"]);
      $redactorRole->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('users_roles');
      Schema::drop('users_roles_rel');
    }
}
