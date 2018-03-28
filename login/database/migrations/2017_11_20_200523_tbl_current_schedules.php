<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblCurrentSchedules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('current_schedules', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('student_id')->unsigned();
          // $table->foreign('days_id')->references('id')->on('days');
          $table->integer('days_id')->unsigned();
          $table->foreign('days_id')->references('id')->on('days');
          $table->integer('hours_id')->unsigned()->nullable();;
          $table->foreign('hours_id')->references('id')->on('hours');

          $table->string('colour');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('current_schedules');
    }
}
