<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSrvnpscoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('srvnpscores', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('nombre')->unique();
            $table->string('tipo')->nullable();
            $table->integer('año')->nullable();
            $table->string('localidad')->nullable();
            $table->string('frecuencia')->nullable();
            $table->string('origen')->nullable();
            $table->string('contacto')->nullable();
            $table->text('link')->nullable();
            $table->integer('idServicio')->unsigned();
            $table->timestamps();

            $table->foreign('idServicio')->references('id')->on('servicios')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('srvnpscores');
    }
}
