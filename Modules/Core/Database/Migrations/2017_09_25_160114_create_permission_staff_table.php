<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePermissionStaffTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create table for associating permissions to users (Many To Many Polymorphic)
        Schema::create('permission_staff', function (Blueprint $table) {
            $table->unsignedInteger('permission_id');
            $table->unsignedInteger('staff_id');
            $table->string('user_type');
            $table->unsignedInteger('team_id')->nullable();

            $table->foreign('permission_id')->references('id')->on('permissions')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('team_id')->references('id')->on('teams')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->unique(['staff_id', 'permission_id', 'user_type', 'team_id']);
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
