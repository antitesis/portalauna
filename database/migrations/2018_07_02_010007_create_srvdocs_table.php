<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSrvdocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('srvdocs', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('nombre')->unique();
            $table->string('abreviatura')->unique();
            $table->text('descripcion')->nullable();
            $table->string('logo')->nullable();
            $table->text('link')->nullable();
            $table->integer('prioridad')->nullable();
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
        Schema::dropIfExists('srvdocs');
    }
}
