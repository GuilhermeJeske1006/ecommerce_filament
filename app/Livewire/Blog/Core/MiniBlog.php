<?php

namespace App\Livewire\Blog\Core;

use Livewire\Component;

class MiniBlog extends Component
{
    public $item;

    public function mount($item){
        $this->item = $item;
    }

    public function render()
    {
        return view('livewire.blog.core.mini-blog');
    }
}
