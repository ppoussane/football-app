<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stats', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('player_id');
            $table->unsignedInteger('week_id')->nullable();
            $table->unsignedTinyInteger('season_id');
            $table->unsignedTinyInteger('league_id');
            $table->unsignedTinyInteger('club_id');

            $table->integer('goal');
            $table->integer('head_goal');
            $table->integer('penalty_goal');
            $table->integer('right_foot_goal');
            $table->integer('left_foot_goal');
            $table->integer('yellow_card');
            $table->integer('red_card');
            $table->integer('faults_committed');
            $table->integer('faults_won');
            $table->integer('ball_recovered');
            $table->integer('ball_given_away');
            $table->integer('dribble');
            $table->integer('pass');
            $table->integer('assist');
            $table->integer('shot');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stats');
    }
}
