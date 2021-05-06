<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Libri extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libri', function (Blueprint $table) {
            $table->id();
            $table->text('titolo');
            $table->unsignedbigInteger('editore_id');
            $table->foreign('editore_id')->references('id')->on('editori')->onUpdate('cascade')->onDelete('cascade');
            $table->text('luogo_edizione');
            $table->text('condizione_libro');
            $table->text('codice');
            $table->text('isbn');
            $table->text('isbn13');
            $table->text('argomento');
            $table->text('anno_edizione');
            $table->text('stato');
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
        Schema::dropIfExists('libri');
    }
}
