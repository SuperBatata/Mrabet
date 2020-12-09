<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDommagesTable extends Migration
{
    /**
     * Run the migrations.
     *public function up()

     * @return void
     */
    public function up()
    {
        Schema::create('dommages', function (Blueprint $table) {
            $table->bigIncrements('id_dommage');
            $table->string('Plomb');
            $table->string('idRemorque');
            $table->string('indentification');
            $table->string('type');
            $table->string('DommageName');
            $table->string('Position');
            $table->string('Anciennete');
            $table->string('Dommage');
            $table->string('Detail');
            $table->String('Unite');
            $table->String('Longeur');
            $table->String('etat');
            $table->bigInteger('Largeur');
            $table->string('dommageImage')->nullable();
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
        Schema::dropIfExists('dommages');
    }
}
