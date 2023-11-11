<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaBlog extends Model
{
    use HasFactory;

    public function blogs()
    {
        return $this->belongsToMany(Blog::class, 'categoria_has_blogs', 'categoria_id', 'blog_id');
    }
}
