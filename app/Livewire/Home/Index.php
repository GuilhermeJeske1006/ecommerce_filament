<?php

namespace App\Livewire\Home;

use App\Models\Produto;
use Livewire\Attributes\Reactive;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $prod;
    public $prodNew;

    public function mount()
    {
       $this->prod = Produto::limit(4)->get();
       $this->prodNew = Produto::orderByDesc('created_at')->limit(4)->get();
    }

    public function render()
    {
        return view('livewire.home.index', [
            'prod' => $this->prod,
            'prodNew' => $this->prodNew
        ]);
    }
}
