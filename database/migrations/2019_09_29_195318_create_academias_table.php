<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('cnpj');
            $table->integer('academia_id')->unsigned();
            $table->foreign('academia_id')->references('id')->on('academias');

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
        Schema::dropIfExists('academias');
    }
}
