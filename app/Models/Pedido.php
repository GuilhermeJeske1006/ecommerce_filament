<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'dataPedido',
        'status',
        'reference',
        'usuario_id'
    ];

    public function itemPedido()
    {
        return $this->hasMany(itemPedido::class);
    }

    public function Produto()
    {
        return $this->belongsTo(Pedido::class);
    }
    public function Usuario()
    {
        return $this->belongsTo(User::class);
    }
}
