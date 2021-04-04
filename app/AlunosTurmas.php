<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class AlunosTurmas extends Model
{   
   /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
   public $table = 'alunos_turmas';
   /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
   protected $visible = [
      'aluno_id','turma_id'
   ];
}