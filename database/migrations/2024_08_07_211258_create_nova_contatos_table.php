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
        Schema::create('nova_contatos', function (Blueprint $table) {
            $table->string('nome', 50);
            $table->string('id');
            $table->string('telefone', 14);
            $table->string('email', 50);
            $table->string('mtv_contato');
            $table->string('mensagem');
            $table->string('endereco');
            $table->char('sexo', 1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nova_contatos');
    }
};
