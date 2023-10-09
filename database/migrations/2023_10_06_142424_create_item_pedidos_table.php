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
        Schema::create('item_pedidos', function (Blueprint $table) {
            $table->id();
            $table->integer("quantidade")->nullable();
            $table->string("tamanho")->nullable();
            $table->decimal("valor", 10,2);
            $table->string("cor")->nullable();
            $table->dateTime("dt_item");
            $table->unsignedBigInteger('produto_id');
            $table->unsignedBigInteger('pedido_id');
            $table->foreign('produto_id')->references('id')->on('produtos')->onDelete("cascade");
            $table->foreign('pedido_id')->references('id')->on('pedidos')->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_pedidos');
    }
};
