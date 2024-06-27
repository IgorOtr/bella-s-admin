<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_produto',
        'valor_custo',
        'valor_venda',
        'valor_lucro',
        'quantidade',
        'nome_img',
        'id_fornecedor',
        'status',
        'search'
    ];
}
