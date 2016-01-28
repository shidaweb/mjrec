<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDayResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('day_results', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('player_id')->unsigned();
        $table->integer('day_settings_id')->unsigned();
        $table->integer('result');
        $table->nullableTimestamps();
        $table->foreign('player_id')->references('id')->on('players')->onDelete('cascade')->onUpdate('cascade');
        $table->foreign('day_settings_id')->references('id')->on('day_settings')->onDelete('cascade')->onUpdate('cascade');
      }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('day_results');
    }
}
