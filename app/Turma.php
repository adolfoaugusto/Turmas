<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
   protected $visible = [
      'ano_execulcao_turma', 'nivel_ensino', 'serie', 'turno'
   ];

   public function Alunos()
   {
      return $this->belongsToMany('App\Aluno');
   }

}
