<?php

namespace App\Livewire\Components;

use Darryldecode\Cart\Cart;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class Header extends Component
{
    public $cart;

    public function mount()
    {
       $this->cart = \Cart::getContent();
    }
    public function render()
    {
        return view('livewire.components.header', [
            'cart' => $this->cart
        ]);
    }
}
