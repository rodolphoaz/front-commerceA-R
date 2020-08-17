<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemAdicionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_adicionals', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id'); // user
            $table->string('description')->nullable(); // desricao
            $table->integer('item_type_id'); // tipo do adicional
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
        Schema::dropIfExists('item_adicionals');
    }
}
