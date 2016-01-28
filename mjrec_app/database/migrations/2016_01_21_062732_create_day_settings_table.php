<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaySettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('day_settings', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('rate');
        $table->string('place');
        $table->date('date');
        $table->nullableTimestamps();
      }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('day_settings'); 
    }
}
