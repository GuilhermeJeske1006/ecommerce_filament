<?php

namespace App\Livewire\Blog;

use App\Models\Blog;
use App\Models\CategoriaBlog;
use Livewire\Component;
use Livewire\Attributes\Reactive;

class Details extends Component
{
    #[Reactive] 
    public $item;

    public function mount($id)
    {
        $this->item = Blog::with(['usuario', 'comentarios', 'categorias'])->find($id);
    }

    public function render()
    {
        $categoria = CategoriaBlog::with('blogs')->orderByDesc('created_at')->limit(6)->get();

        return view('livewire.blog.details', [
            'item' => $this->item,
            'categoria' => $categoria,
            'newBlog' => Blog::orderByDesc('created_at')->limit(3)->get(),
        ]);
    }
}
