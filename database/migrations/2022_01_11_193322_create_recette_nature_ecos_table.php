<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecetteNatureEcosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recette_nature_ecos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('classe')->nullable();
            $table->string('article')->nullable();
            $table->string('paragraphe')->nullable();
            $table->string('ligne')->nullable();
            $table->string('rubrique')->nullable();
            $table->string('sous_rubrique')->nullable();
            $table->string('libelle_nature_eco')->nullable();
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
        Schema::dropIfExists('recette_nature_ecos');
    }
}
