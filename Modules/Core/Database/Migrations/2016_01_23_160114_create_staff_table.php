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
            $table->integer('employee_id')->unsigned()->index('employee_id');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('loginhash');
            $table->string('email')->nullable();
            $table->string('confirmation_code')->nullable();
            $table->smallInteger('failed_logins')->nullable();
            $table->boolean('is_registered')->default(1);
            $table->boolean('is_confirmed')->default(1);
            $table->timestamps();
            $table->softDeletes();
            $table->unique(['company_id']);
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
