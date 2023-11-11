<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function comentarios()
    {
        return $this->hasMany(ComentarioBlog::class);
    }

    public function categorias()
    {
        return $this->belongsToMany(CategoriaBlog::class, 'categoria_has_blogs', 'blog_id', 'categoria_id');
    }

    public function scopeSearch($query, $search)
    {
        if ($search) {
            return $query->where('titulo', 'LIKE', '%' . $search . '%');
        }
        return $query;
    }
}
