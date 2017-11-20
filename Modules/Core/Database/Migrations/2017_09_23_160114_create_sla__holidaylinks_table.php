<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSlaHolidaylinksTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sla__holidaylinks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('slaplan_id')->unsigned();
            $table->integer('slaholiday_id')->unsigned()->index('sla__holidaylinks_slaholidayid_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sla__holidaylinks');
    }

}
