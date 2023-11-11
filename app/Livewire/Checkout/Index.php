<?php

namespace App\Livewire\Checkout;

use Illuminate\Support\Facades\Http;
use Livewire\Attributes\Url;
use Livewire\Component;

class Index extends Component
{
    public $endereco = '';

    #[Url(as: 'q', keep: true)]
    public ?string $cep = '';

    public function mount()
    {
        $response = Http::get('viacep.com.br/ws/'. $this->cep. '/json/');
        $this->endereco = $response->json();

    }


    public function render()
    {
        return view('livewire.checkout.index');
    }
}
