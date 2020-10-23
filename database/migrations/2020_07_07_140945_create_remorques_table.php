<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemorquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remorques', function (Blueprint $table) {
            $table->bigIncrements('id_remorque');
            $table->string('identification');
            $table->string('plomb');
            $table->string('type');
            $table->string('chargeur');
            $table->string('vue1')->nullable();
            $table->string('vue2')->nullable();
            $table->string('vue3')->nullable();
            $table->string('vue4')->nullable();
            $table->string('SCELLE');
            $table->string('phase');
            $table->string('voyage_id');
            $table->foreign('voyage_id')->references('idVoyage')->on('voyages');
            $table->rememberToken();
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
        Schema::dropIfExists('remorques');
    }
}
