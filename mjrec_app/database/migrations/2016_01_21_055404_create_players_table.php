<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('players', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('group_id')->unsigned();
        $table->string('name');
        $table->integer('total_score');
        $table->nullableTimestamps();
        $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
      }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('players'); 
    }
}
