<?php

namespace App\Livewire\History;

use Livewire\Component;

class Index extends Component
{
    public $count = 1;
 
    public function increment()
    {
        $this->count+ 1;
    }
 
    public function save()
    {
        $this->count--;
        dd($this->count);
    }

    public function render()
    {
        return view('livewire.history.index', [
            'count' => $this->count
        ]);
    }
}
