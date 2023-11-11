<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'nome' => fake()->name,
            'valor' => fake()->randomFloat(2, 0, 1000), // Gera um número float aleatório entre 0 e 1000 com 2 casas decimais
            'foto' => fake()->imageUrl(), // Gera uma URL de imagem falsa
            'descricao' => fake()->sentence,
            'descricao_longa' => fake()->paragraph,
            'peso' => fake()->randomFloat(2, 0, 100), // Gera um número float aleatório entre 0 e 100 com 2 casas decimais
            'dimensao' => fake()->randomNumber(2).'x'.fake()->randomNumber(2).'x'.fake()->randomNumber(2), // Gera dimensões fictícias no formato "LxAxP"
            'material' => fake()->word, // Gera uma palavra aleatória
            'subcategoria_id' => 1
        ];
    }
}
