<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDepartmentsEmployeesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments__employees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('department_id')->unsigned()->index('department_employee_departmentid_foreign');
            $table->integer('team_id')->unsigned()->index('department_employee_teamid_foreign');
            $table->integer('employee_id')->unsigned()->index('department_employee_employeeid_foreign');
            $table->boolean('is_teamleader');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('departments__employees');
    }

}
