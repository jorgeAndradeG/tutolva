<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tolva', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('id_admin')->unsigned();
            $table->string('direccion');
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->integer('estado');
            $table->foreign('id_admin')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('tolva');
        
    }
};
