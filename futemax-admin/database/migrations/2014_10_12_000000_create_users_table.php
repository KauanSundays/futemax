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
        Schema::create('users', function (Blueprint $table) {
            $table->primary('cod_usuario', 25);
            $table->string('name', 25)->nullable(false);
            $table->string('email')->unique();
            $table->string('password')->nullable(false);
            $table->boolean('is_admin')->nullable(false);;
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
