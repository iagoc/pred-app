<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residents', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('phone');
            $table->string('info_address_local');
            $table->string('apart_number');
            $table->string('light_number');
            $table->float('rent_price');
            $table->date('due_date');
            $table->integer('building_id')->unsigned();;
            
            $table->foreign('building_id')->references('id')->on('buildings');

            $table->engine = 'InnoDB';
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('residents');
    }
}
