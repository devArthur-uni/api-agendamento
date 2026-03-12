<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = [
        'nome',
        'sobrenome',
        'cpf',
        'data_nascimento'
    ];
}