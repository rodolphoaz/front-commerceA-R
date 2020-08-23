<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaricaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caricatures', function (Blueprint $table) {
            $table->id();
            $table->string('sort'); //tipo
            $table->integer('slide'); //caminho pro slide exemplo
            $table->string('template'); // modelo
            $table->float('price'); // preco
            $table->boolean('status')->nullable()->default(true);
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
        Schema::dropIfExists('caricatures');
    }
}
