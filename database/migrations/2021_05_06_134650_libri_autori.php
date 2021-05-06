<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LibriAutori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libri_autori', function (Blueprint $table) {
            $table->unsignedBigInteger('libro_id');
            $table->unsignedBigInteger('autore_id');
            $table->foreign('libro_id')->references('id')->on('libri')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('autore_id')->references('id')->on('autori')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libri_autori');
    }
}
