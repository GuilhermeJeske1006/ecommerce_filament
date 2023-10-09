<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemPedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantidade',
        'tamanho',
        'valor',
        'cor',
        'dt_item',
        'produto_id',
        'pedido_id'
    ];

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}
