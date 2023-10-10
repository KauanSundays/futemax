<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id('cod_game'); // Chave primária auto-incrementável
            $table->text('description'); // Descrição da partida
            $table->dateTime('game_day'); // Data e hora da partida
            $table->string('game_name'); // Nome da partida
            $table->unsignedBigInteger('tag_id'); // Chave estrangeira para tags
            $table->timestamps(); // Colunas padrão para created_at e updated_at

            // Define a relação com a tabela "tags"
            $table->foreign('tag_id')->references('cod_tag')->on('tags');
        });
    }

    public function down()
    {
        Schema::dropIfExists('games');
    }
}
