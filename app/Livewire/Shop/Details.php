<?php

namespace App\Livewire\Shop;

use App\Models\Produto;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class Details extends Component
{
    public $item;

    public function mount(int $id)
    {
        $this->item = Produto::with(['fotos', 'tamanhos'])->find($id);
    }

    public function render()
    {
        return view('livewire.shop.details', [
            'item' => $this->item,
            'newProd' => Produto::orderByDesc('created_at')->limit(3)->get(),
        ]);
    }
}
