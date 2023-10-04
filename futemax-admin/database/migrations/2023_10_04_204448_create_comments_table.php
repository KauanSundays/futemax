<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('cod_comment');
            $table->unsignedBigInteger('cod_usuario');
            $table->unsignedBigInteger('cod_game')->nullable();
            $table->text('comment')->nullable();
            $table->timestamps();
    
            // Definindo a chave estrangeira
            $table->foreign('cod_usuario')->references('cod_usuario')->on('users');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
