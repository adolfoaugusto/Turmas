<?php

namespace App\Http\Controllers\API;

use App\Models\Aluno;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Turma;

class AlunosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aluno = Aluno::with('turmas')->paginate(10);
        return response()->json($aluno);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aluno = new Aluno();
        $aluno->fill($request->all());
        $aluno->save();

        if(!is_null($request->turma_id)){
            $turma = Turma::find($request->turma_id);
            $aluno->Turmas()->attach($turma);
        }

        return response()->json($aluno, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aluno = Aluno::with('turmas')->find($id);
        
        if(!$aluno) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }
        
        return response()->json($aluno);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $aluno = Aluno::with('turmas')->find($id);

        if(!$aluno) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $aluno->fill($request->all());
        $aluno->save();
        // $aluno->Turmas->sync($aluno->Turmas);

        return response()->json($aluno);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aluno = Aluno::findOrFail($id);

        if(!$aluno) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $aluno->delete();
    }
}
