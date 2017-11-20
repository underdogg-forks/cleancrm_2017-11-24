<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100)->unique();
            $table->string('slug', 100)->unique();
            $table->string('display_name', 100)->nullable();
            $table->integer('team_lead_id')->unsigned()->nullable()->index('team_lead');
            $table->foreign('team_lead_id', 'teams_teamleader')->references('id')->on('staff')->onUpdate('NO ACTION')->onDelete('RESTRICT');
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::table('teams', function (Blueprint $table) {
            $table->dropForeign('teams_teamleader');
        });
        Schema::drop('teams');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
