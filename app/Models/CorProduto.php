<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorProduto extends Model
{
    use HasFactory;

    protected $table = "cor_produtos";

    protected $fillable = [
        'cor',
        'produto_id'
    ];
    
    public function tamanhos()
    {
        return $this->hasOne(TamanhoProduto::class);
    }

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}
