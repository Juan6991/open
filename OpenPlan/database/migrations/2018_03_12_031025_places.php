<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Places extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->text('descripcion');
            $table->integer('telefono');
            $table->char('direccion');
            $table->time('hora_apertura');
            $table->time('hora_cierre');
            $table->integer('categories_id')->unsigned();            
            $table->foreign('categories_id')->references('id')->on('categories');
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
        //
    }
}
