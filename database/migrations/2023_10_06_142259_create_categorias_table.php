<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('categoria', 100);
            $table->timestamps();
        });

        DB::table('categorias')->insert([
            ['categoria' => 'Menino'],
            ['categoria' => 'Menina'],
            ['categoria' => 'Unisex'],
            ['categoria' => 'Outros'],
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorias');
    }
};
