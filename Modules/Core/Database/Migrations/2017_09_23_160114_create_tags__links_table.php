<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTagsLinksTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags__links', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tag_id')->unsigned()->index('tags__links_tagid_foreign');
            $table->smallInteger('linktypeid')->unsigned();
            $table->integer('link_id')->unsigned();
            $table->integer('staff_id')->unsigned()->index('tags__links_staffid_foreign');
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
        Schema::drop('tags__links');
    }

}
