<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::get('/test', function (Request $request) {
//     $response = new \Illuminate\Http\Response(json_encode(['msg' => 'Minha primeira api']));
//     $response->header('Content-Type', 'application/json');
//     return $response;
// });

Route::apiResource('turmas', 'API\TurmasController');
Route::apiResource('alunos', 'API\AlunosController');