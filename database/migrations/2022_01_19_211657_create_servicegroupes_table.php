<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicegroupesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicegroupes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codeservicegroupe');
            $table->string('libelle_servicegroupe');
            $table->timestamps();


            $table->integer('typeservice_id')->constrained();

            $table->integer('numerogroupe_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicegroupes');
    }
}
