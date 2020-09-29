<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
<<<<<<< HEAD
            $table->id();
            $table->string('sort'); //tipo
            $table->string('slide'); //caminho pro slide exemplo
            $table->string('template'); // modelo
            $table->float('price'); // preco
=======
            $table->bigIncrements();
            $table->uuid('uuid');
>>>>>>> 9c783943133ab19bc27690e945b0e55d35a6b177
            $table->float('preco'); //preco do produto
            $table->integer('categoria_produto_id'); // infatil / adulto / mascote 
            $table->string('nome_produto');
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('produtos');
    }
}
