<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContatoUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contato_users', function (Blueprint $table) {
            $table->bigIncrements();
            $table->uuid('uuid');
            $table->integer('user_id'); // cliente / funcionrio
            $table->string('tipo')->default('pessoal'); // pessoal / comercial / profissional
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
        Schema::dropIfExists('contato_users');
    }
}
