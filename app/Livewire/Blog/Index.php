<?php

namespace App\Livewire\Blog;

use App\Models\Blog;
use App\Models\CategoriaBlog;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    #[Url]
    public $search = '';

    public function render()
    {
        $blog = Blog::with('usuario')->with('comentarios')->search($this->search)->paginate(6);
        $categoria =  CategoriaBlog::with('blogs')->orderByDesc('created_at')->limit(6)->get();


        return view('livewire.blog.index', [
            'categoria' => $categoria,
            'blog' => $blog,
            'newBlog' => Blog::orderByDesc('created_at')->limit(3)->get(),
        ]);
    }
}
