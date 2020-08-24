<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandeds', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('caricature_id');
            $table->integer('custom_id');
            $table->string('status')->nullable()->default('pendente');
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
        Schema::dropIfExists('demandeds');
    }
}
