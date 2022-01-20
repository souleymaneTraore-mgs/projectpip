<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecetteModeFinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recette_mode_fins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codefin');
            $table->string('libellefin');
            $table->timestamps();


            $table->integer('sourcefinancement_id')->constrained();
            $table->integer('typefinancement_id')->constrained();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recette_mode_fins');
    }
}
