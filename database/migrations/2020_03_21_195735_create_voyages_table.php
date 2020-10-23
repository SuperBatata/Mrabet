<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoyagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voyages', function (Blueprint $table) {
            $table->bigIncrements('idVoyage');
            $table->string('nomVoyage');
            $table->string('nomBateau');
            $table->string('portDeChargement');
            $table->string('portDeDechargement');
            $table->string('responsablePhase1');
            $table->string('responsablePhase2');
            $table->string('etat');
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
        Schema::dropIfExists('voyages');
    }
}
