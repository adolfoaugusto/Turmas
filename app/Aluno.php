<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $visible = [
        'nome', 'telefone', 'email', 'data_nascimento', 'genero'
    ];

    public function Turmas()
    {
        return $this->belongsToMany('App\Turma', 'alunos_turmas', 'turma_id', 'aluno_id');
    }

}
