<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TamanhoProduto extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'tamanho',
        'qtdTamanho',
        'produto_id',
        'cor_id'
    ];

    public function cor()
    {
        return $this->belongsTo(CorProduto::class, 'cor_id');
    }
    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}
