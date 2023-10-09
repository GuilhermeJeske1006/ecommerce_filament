<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'valor',
        'foto',
        'descricao',
        'descricao_longa',
        'id',
        'peso',
        'qtd',
        'dimensao',
        'material',
        'categoria_id'
    ];




    public function fotos()
    {
        return $this->hasMany(ImagemProduto::class);
    }

    public function tamanhos()
    {
        return $this->hasMany(TamanhoProduto::class);
    }

    public function cores()
    {
        return $this->hasMany(CorProduto::class);
    }
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
