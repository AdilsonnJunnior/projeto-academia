<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiliaProfessorFederacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filia_professor__federacaos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('professor_id')->unsigned();
            $table->foreign('professor_id')->references('id')->on('professors');

            $table->integer('federacao_id')->unsigned();
            $table->foreign('federacao_id')->references('id')->on('federacaos');
            
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
        Schema::dropIfExists('filia_professor__federacaos');
    }
}
