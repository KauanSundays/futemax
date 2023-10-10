<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id('cod_comment'); // Chave primária auto-incrementável
            $table->text('content'); // Conteúdo do comentário
            $table->unsignedBigInteger('game_id'); // Chave estrangeira para games
            $table->timestamps(); // Colunas padrão para created_at e updated_at

            // Define a relação com a tabela "games"
            $table->foreign('game_id')->references('cod_game')->on('games');
        });
    }

    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
