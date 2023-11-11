<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'imagem' => fake()->imageUrl(), // Gera uma URL de imagem fictícia
            'titulo' => fake()->sentence, // Gera uma frase fictícia
            'subtitulo' => fake()->sentence, // Gera um subtitulo fictício
            'descricao' => fake()->paragraph, // Gera um parágrafo fictício
            'usuario_id' => 1, // Define o valor do usuário como 1 (sempre o mesmo valor)
        ];
    }
}
