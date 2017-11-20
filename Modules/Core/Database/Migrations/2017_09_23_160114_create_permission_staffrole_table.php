<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePermissionStaffroleTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission_staffrole', function (Blueprint $table) {
            $table->integer('permission_id')->unsigned();
            $table->integer('staffrole_id')->unsigned()->index('permission_staffrole_staffrole_id_foreign');
            $table->primary(['permission_id', 'staffrole_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('permission_staffrole');
    }

}
