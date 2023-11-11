<?php

namespace App\Livewire\Shop;

use App\Models\Categoria;
use App\Models\Produto;
use App\Models\SubCategoria;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        $categorias = Categoria::with('subcategorias')->get();

        return view('livewire.shop.index', [
            'prod' => Produto::paginate(12),
            'categorias' => $categorias
        ]);
    }
}
