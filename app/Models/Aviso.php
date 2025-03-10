<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aviso extends Model
{
    use HasFactory;

    protected $fillable = [
        'grupo',
        'icone',
        'titulo',
        'descricao',
        'imagem',
        'link',
        'created_at',
    ];
}
