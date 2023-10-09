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
        Schema::table('tamanho_produtos', function (Blueprint $table) {
            $table->unsignedBigInteger('cor_produto_id');
            $table->foreign('cor_produto_id')->references('id')->on('cor_produtos');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
