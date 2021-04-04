<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunosTurmasTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alunos_turmas', function (Blueprint $table) 
		{
			$table->id();
			$table->bigInteger('aluno_id')->unsigned();
			$table->bigInteger('turma_id')->unsigned();

			$table->foreign('aluno_id')->references('id')->on('alunos')
												->onUpdate('cascade')->onDelete('cascade');
			$table->foreign('turma_id')->references('id')->on('turmas')
												->onUpdate('cascade')->onDelete('cascade');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('alunos_turmas');
	}
}
