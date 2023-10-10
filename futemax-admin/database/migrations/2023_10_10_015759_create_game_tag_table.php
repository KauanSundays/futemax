<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameTagTable extends Migration
{
    public function up()
    {
        Schema::create('game_tag', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('game_id');
            $table->unsignedBigInteger('tag_id');

            // Define as chaves estrangeiras para games e tags
            $table->foreign('game_id')->references('cod_game')->on('games');
            $table->foreign('tag_id')->references('cod_tag')->on('tags');
        });
    }

    public function down()
    {
        Schema::dropIfExists('game_tag');
    }
}
