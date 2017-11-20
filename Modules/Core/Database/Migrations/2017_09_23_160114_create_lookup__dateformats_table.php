<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLookupDateformatsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lookup__dateformats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('format');
            $table->string('picker_format');
            $table->string('label');
            $table->string('format_moment')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('lookup__dateformats');
    }

}
