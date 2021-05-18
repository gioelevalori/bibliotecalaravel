<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Prestiti extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestiti', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('utente_id');
            $table->foreign('utente_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedbigInteger('libro_id');
            $table->foreign('libro_id')->references('id')->on('libri')->onUpdate('cascade')->onDelete('cascade');
            $table->date('data_prestito');
            $table->date('data_riconsegna');
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
        Schema::dropIfExists('prestiti');
    }
}
