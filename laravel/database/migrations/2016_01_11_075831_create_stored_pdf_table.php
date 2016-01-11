<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoredPdfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('stored_pdf', function (Blueprint $table)
      {
          $table->increments('id');
          $table->string('title');
      });

      Schema::create('application_pdf_rel', function (Blueprint $table)
      {
          $table->integer('application_id')->unsigned();
          $table->integer('pdf_id')->unsigned();
          $table->foreign('application_id')->references('id')->on('student_application');
          $table->foreign('pdf_id')->references('id')->on('stored_pdf');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('stored_pdf');
    }
}
