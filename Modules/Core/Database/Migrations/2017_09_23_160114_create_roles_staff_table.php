<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRolesStaffTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create table for associating roles to users and teams (Many To Many Polymorphic)
        Schema::create('roles_staff', function (Blueprint $table) {
            $table->unsignedInteger('role_id');
            $table->unsignedInteger('staff_id');
            $table->string('user_type');
            $table->unsignedInteger('team_id')->nullable();

            $table->foreign('role_id')->references('id')->on('roles')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('team_id')->references('id')->on('teams')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->unique(['staff_id', 'role_id', 'user_type', 'team_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('role_staff');
    }

}
