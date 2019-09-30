<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGraduaProfessorGraduacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gradua_professor_graduacaos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('graduacao_id')->unsigned();
            $table->foreign('graduacao_id')->references('id')->on('graduacaos');

            $table->integer('professor_id')->unsigned();
            $table->foreign('professor_id')->references('id')->on('professors');
            
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
        Schema::dropIfExists('gradua_professor_graduacaos');
    }
}
