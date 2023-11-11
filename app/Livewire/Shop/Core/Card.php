<?php

namespace App\Livewire\Shop\Core;

use Darryldecode\Cart\Cart;
use Illuminate\Http\Client\Request;
use Illuminate\View\View;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class Card extends Component
{
    #[Reactive]
    public $item;
    public $valor = '';
    public $foto = '';
    public $nome = '';
    public $id = '';


    public function save()
    {
        \Cart::add([
            'id' => $this->id,
            'name' => $this->nome,
            'price' => $this->valor,
            'quantity' => 1,
            'attributes' => array(
                'foto' => $this->foto,

            )
        ]);


       session()->flash('message', 'Produto adicionado ao carrinho!');
    }

    public function mount($item){
        $this->item = $item;

        $this->valor = $this->item->valor;
        $this->nome = $this->item->nome;
        $this->id = $this->item->id;
        $this->foto = $this->item->foto;
    }

    public function render() : View
    {
        return view('livewire.shop.core.card', [
            'item' => $this->item
        ]);
    }
}
