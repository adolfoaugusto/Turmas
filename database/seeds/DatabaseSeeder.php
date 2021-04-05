<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alunos')->insert([
            'nome' => 'Teste1',
            'email' => 'teste1@gmail.com',
            'telefone' => '12312312',
            'data_nascimento' => '2000-01-01',
            'genero' => 'Masculino',
            ],
            [
            'nome' => 'Teste2',
            'email' => 'teste2@gmail.com',
            'telefone' => '12312312',
            'data_nascimento' => '2000-02-02',
            'genero' => 'Femenino',
        ]);
        DB::table('alunos_turmas')->insert(
            [
                'aluno_id' => 1,
                'turma_id' => 2
            ],
            [
                'aluno_id' => 1,
                'turma_id' => 3
            ]
        );
    }
}
