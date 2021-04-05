<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = [
        'nome', 'telefone', 'email', 'data_nascimento', 'genero'
    ];

    public function Turmas()
    {
        return $this->belongsToMany('App\Models\Turma', 'alunos_turmas');
    }

}
