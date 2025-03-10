<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pdf extends Model
{
    use HasFactory;

    protected $fillable = [
        'disciplina_id',
        'nome',
        'descricao',
        'imagem',
        'ch',
        'link',
        'codigo',
        'created_at',
    ];
}
