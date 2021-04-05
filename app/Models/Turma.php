<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
   protected $fillable = [
      'ano_execulcao_turma', 'nivel_ensino', 'serie', 'turno'
   ];

   public function Alunos()
   {
      return $this->belongsToMany('App\Models\Aluno');
   }

}
