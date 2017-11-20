<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDepartmentsTeamsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments__teams', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('departmentid')->unsigned()->index('department_employee_departmentid_foreign');
            $table->integer('teamid')->unsigned()->index('department_employee_teamid_foreign');
            $table->integer('teamleader_id')->unsigned()->index('teamleader_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('departments__teams');
    }

}
