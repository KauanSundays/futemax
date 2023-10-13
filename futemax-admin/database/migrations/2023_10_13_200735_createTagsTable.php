<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('game_id'); // Chave estrangeira para games
            $table->string('name_tag');

            // Define a relação com a tabela "games"
            $table->foreign('game_id')->references('cod_game')->on('games');
        });
    }


    public function down()
    {
        Schema::dropIfExists('tags');
    }
}
