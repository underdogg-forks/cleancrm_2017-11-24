<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnnouncementsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('announcements', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('staff_id')->unsigned()->index('staff_id');
            $table->string('name', 100);
            $table->text('message', 16777215)->nullable();
            $table->boolean('showtousers')->default(1);
            $table->boolean('showtostaff')->default(1);
            $table->boolean('showname')->default(1);
            $table->dateTime('dateadded');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('announcements');
    }

}
