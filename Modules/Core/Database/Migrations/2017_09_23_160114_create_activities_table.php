<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivitiesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->unsigned()->index('company_id');
            $table->integer('staff_id')->unsigned()->index('staff_id');
            $table->integer('customer_id')->unsigned()->nullable()->index('customer_id');
            $table->integer('expense_id')->unsigned()->nullable()->index('expense_id');
            $table->integer('relation_id')->unsigned()->nullable()->index('relation_id');
            $table->integer('payment_id')->unsigned()->nullable()->index('payment_id');
            $table->integer('invoice_id')->unsigned()->nullable()->index('invoice_id');
            $table->integer('credit_id')->unsigned()->nullable()->index('credit_id');
            $table->integer('invitation_id')->unsigned()->nullable();
            $table->text('json_backup', 65535)->nullable();
            $table->integer('activity_type_id')->unsigned()->index('activity_type_id');
            $table->decimal('adjustment', 13)->nullable();
            $table->decimal('balance', 13)->nullable();
            $table->integer('token_id')->unsigned()->nullable();
            $table->string('ip')->nullable();
            $table->boolean('is_system')->default(0);
            $table->text('notes', 16777215)->nullable();
            $table->boolean('is_deleted');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('activities');
    }

}
