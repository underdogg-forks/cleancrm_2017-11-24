<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLookupDatetimeformatsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lookup__datetimeformats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('format');
            $table->string('label');
            $table->string('format_moment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('lookup__datetimeformats');
    }

}
