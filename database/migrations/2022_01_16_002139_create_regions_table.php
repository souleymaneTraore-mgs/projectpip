<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::disableForeignKeyConstraints();
        Schema::create('regions', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->unsignedBigInteger('zone_id');
            $table->string('code_region');
            $table->string('libelle_region');
            $table->timestamps();


            $table->integer('zone_id')->constrained();

            
            //$table->foreign('zone_id')->references('id')->on('zone')->onDelete->('casacde')->onUpdate('casacde');


        });




        /*Schema::table('regions', function (Blueprint $table)*/
        
        


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regions');
    }
}
