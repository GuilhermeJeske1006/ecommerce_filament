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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string("nome", 100);
            $table->decimal("valor", 10,2);
            $table->string("foto")->nullable();
            $table->string("descricao", 255)->nullable();
            $table->longText("descricao_longa")->nullable();
            $table->string("peso")->nullable();
            $table->integer('qtd')->nullable();
            $table->string("dimensao", 50)->nullable();
            $table->string("material", 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
