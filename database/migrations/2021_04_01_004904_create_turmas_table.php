<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turmas', function (Blueprint $table) 
        {
            $table->bigIncrements('id');
            $table->year('ano_execulcao_turma');
            $table->enum('nivel_ensino', ['fundamental', 'medio']);
            $table->integer('serie');
            $table->string('turno', 10); //manhã, tarde, noite
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
        Schema::dropIfExists('turmas');
    }
}
