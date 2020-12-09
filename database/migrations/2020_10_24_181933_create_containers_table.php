<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('containers', function (Blueprint $table) {
            $table->bigIncrements('id_container');
            $table->string('type');
            $table->string('chargeur');
            $table->string('height');
            $table->string('length');
            $table->string('Plomb');
            $table->string('phase');
            $table->string('indentification');
            $table->string('DommageName');
            $table->string('Position');
            $table->string('Anciennete');
            $table->string('Dommage');
            $table->string('Unite');
            $table->string('Detail');


            $table->timestamps();

            $table->integer('id_voyage');
            $table->foreign('id_voyage')->references('idVoyage')->on('voyages');
            $table->string('chargeur_id')->nullable();
            $table->foreign('chargeur_id')->references('chargeur_id')->on('chargeurs')->onDelete('SET NULL');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('containers');
    }
}
