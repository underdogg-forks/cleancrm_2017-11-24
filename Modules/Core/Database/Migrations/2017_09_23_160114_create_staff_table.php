<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStaffTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->unsigned()->index();
            $table->boolean('is_admin')->default(1);
            $table->integer('employee_id')->unsigned()->index('employee_id');
            $table->integer('public_id')->unsigned()->nullable();
            $table->boolean('is_darkmode')->nullable()->default(0);
            $table->string('username')->unique();
            $table->string('password');
            $table->integer('permissions')->unsigned()->default(0);
            $table->string('loginhash');
            $table->string('email')->nullable();
            $table->string('confirmation_code')->nullable();
            $table->smallInteger('failed_logins')->nullable();
            $table->boolean('is_registered')->default(1);
            $table->boolean('is_confirmed')->default(1);
            $table->timestamps();
            $table->softDeletes();
            $table->unique(['company_id', 'public_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('staff');
    }

}
