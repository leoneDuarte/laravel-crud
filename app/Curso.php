<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = [
        'curso_nome','curso_descricao','curso_imagem','curso_valor','curso_publicado'
    ];

    protected $primaryKey = 'curso_id';




}
