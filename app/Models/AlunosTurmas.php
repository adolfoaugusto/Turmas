<?php
namespace App\Models;

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
   protected $fillable = [
      'aluno_id','turma_id'
   ];
}