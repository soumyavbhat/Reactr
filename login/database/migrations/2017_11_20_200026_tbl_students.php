<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('status_id');
          $table->foreign('status_id')->references('id')->on('status');
          $table->string('profile_image')->nullable();
          $table->string('first_name');
          $table->string('last_name');
          $table->integer('current_schedules_id')->nullable();
          $table->foreign('current_schedules_id')->references('id')->on('current_schedules');
          $table->string('fol_email',50);
          $table->string('nonfol_email',50);
          $table->string('student_number');
          $table->string('address',100);
          $table->string('phone',30);
          $table->string('linkedin_account');
          $table->integer('programs_id');
          $table->foreign('programs_id')->references('id')->on('programs');
          $table->string('section');
          $table->integer('projects_id');
          $table->foreign('projects_id')->references('id')->on('projects');
          $table->integer('roles_id');
          $table->foreign('roles_id')->references('id')->on('roles');
          $table->string('emergency_contact',100);
          $table->string('emergency_number',30);
          $table->string('graduation_year',15);
          $table->string('current_title',50)->nullable();
          $table->string('current_company',50)->nullable();
          $table->string('contact_info',150)->nullable();
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
        Schema::dropIfExists('students');
    }
}
