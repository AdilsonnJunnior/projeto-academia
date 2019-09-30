<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('idade');
            $table->string('email');
            $table->string('cpf');
            $table->string('telefone');

            $table->integer('federacao_id')->unsigned();
            $table->foreign('federacao_id')->references('id')->on('federacaos');

            $table->integer('graduacao_id')->unsigned();
            $table->foreign('graduacao_id')->references('id')->on('graduacaos');

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
        Schema::dropIfExists('professors');
    }
}
