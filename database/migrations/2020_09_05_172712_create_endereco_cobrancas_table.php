<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecoCobrancasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endereco_cobrancas', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('cep');
            $table->string('complemento');
            $table->string('rua');
            $table->string('numero');
            $table->string(2,'uf');
            $table->string('cidade');
            $table->string('bairro');
            $table->string('pais');
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
        Schema::dropIfExists('endereco_cobrancas');
    }
}
