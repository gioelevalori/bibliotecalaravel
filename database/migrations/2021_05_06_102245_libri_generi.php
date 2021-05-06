<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LibriGeneri extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libri_generi', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('libro_id');
            $table->foreign('libro_id')->references('id')->on('libri')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedbigInteger('genere_id');
            $table->foreign('genere_id')->references('id')->on('generi')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('libri_generi');
    }
}
