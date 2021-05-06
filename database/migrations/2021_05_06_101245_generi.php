<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Generi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generi', function (Blueprint $table) {
            $table->id();
            $table->text('avventura');
            $table->text('autobiografia');
            $table->text('biografia');
            $table->text('romanzo');
            $table->text('fantasy');
            $table->text('thriller');
            $table->text('horror');
            $table->text('informatica');
            $table->text('fantascienza');
            $table->text('giallo');
            $table->text('rosa');
            $table->text('umoristico');
            $table->text('storico');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('generi');
    }
}
