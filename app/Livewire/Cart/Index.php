<?php

namespace App\Livewire\Cart;

use Darryldecode\Cart\Cart;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class Index extends Component
{
    public $item;
    public $subtotal = 0;
    public $total = 0;

    public function boot()
    {
        $this->loadCart();
    }
    
    public function mount()
    {
        $this->loadCart();
    }
    
    public function render()
    {
        return view('livewire.cart.index');
    }
    
    public function loadCart()
    {
        $this->item = \Cart::getContent();

    }
    
    
    public function remove($id)
    {
        \Cart::remove($id);
        $this->loadCart(); 
    }
    
    public function updateQuantity($id, $quantity)
    {
        \Cart::update($id, [
            'quantity' => $quantity,
        ]);
    
        // Recalculate the total and subtotal here to update them
        $this->loadCart();
    }
    
}