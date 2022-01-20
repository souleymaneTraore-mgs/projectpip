<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasseGroupesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    {
        Schema::create('classe_groupes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code_grp_classe');
            $table->string('libelle_grp_classe');
            $table->timestamps();


            $table->integer('groupe_id')->constrained();
            $table->integer('classe_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    
    {
        Schema::dropIfExists('classe_groupes');
    }
}
