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
        Schema::create('libris', function (Blueprint $table) {
            $table->id();
            $table->text('Titolo');
            $table->unsignedbigInteger('autore_id');
            $table->foreign('autore_id')->references('id')->on('autoris')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedbigInteger('editore_id');
            $table->foreign('editore_id')->references('id')->on('editoris')->onUpdate('cascade')->onDelete('cascade');
            $table->text('luogo_edizione');
            $table->text('condizione_libro');
            $table->text('codice');
            $table->text('isbn');
            $table->text('isbn13');
            $table->text('argomento');
            $table->date('anno_edizione');
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
        Schema::dropIfExists('libris');
    }
}
