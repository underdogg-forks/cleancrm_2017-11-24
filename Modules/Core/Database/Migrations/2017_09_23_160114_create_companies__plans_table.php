<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompaniesPlansTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies__plans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->unsigned()->index('company_id');
            $table->enum('plan', array('pro', 'enterprise', 'white_label'))->nullable();
            $table->enum('plan_term', array('month', 'year'))->nullable();
            $table->date('plan_started')->nullable();
            $table->date('plan_paid')->nullable();
            $table->date('plan_expires')->nullable();
            $table->integer('payment_id')->unsigned()->nullable();
            $table->date('trial_started')->nullable();
            $table->enum('trial_plan', array('pro', 'enterprise'))->nullable();
            $table->enum('pending_plan', array('pro', 'enterprise', 'free'))->nullable();
            $table->enum('pending_term', array('month', 'year'))->nullable();
            $table->text('bcc_email', 65535)->nullable();
            $table->text('client_number_prefix', 65535)->nullable();
            $table->integer('client_number_counter')->nullable()->default(0);
            $table->text('client_number_pattern', 65535)->nullable();
            $table->boolean('domain_id')->nullable()->default(1);
            $table->boolean('payment_terms_id')->nullable();
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
        Schema::drop('companies__plans');
    }

}
