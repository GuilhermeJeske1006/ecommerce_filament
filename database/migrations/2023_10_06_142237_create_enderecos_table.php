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
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->string('rua');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->string('pais');
            $table->string('cep');
            $table->string('complemento')->nullable();
            $table->integer('numero')->nullable();
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('endereco_id')->nullable();
            $table->foreign('endereco_id')->references('id')->on('enderecos')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['endereco_id']);
            $table->dropColumn('endereco_id');
        });

        Schema::dropIfExists('enderecos');
    }
};
