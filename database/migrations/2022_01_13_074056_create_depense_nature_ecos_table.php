<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepenseNatureEcosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depense_nature_ecos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('classe');
            $table->string('article');
            $table->string('paragrape');
            $table->string('ligne');
            $table->string('rubrique');
            $table->string('sous_rubrique');
            $table->string('libelle_nature_eco');
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
        Schema::dropIfExists('depense_nature_ecos');
    }
}
