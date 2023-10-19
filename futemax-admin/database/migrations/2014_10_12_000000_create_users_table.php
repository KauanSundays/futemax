<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('cod_usuario'); // Defina 'cod_usuario' como chave primária
            $table->string('name', 25)->nullable(false);
            $table->string('email')->unique()->nullable(false);
            $table->string('password')->nullable(false);
            // $table->boolean('is_admin')->nullable(false);
            $table->timestamps();
        });
    }



    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
