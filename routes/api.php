<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConcursoController; 
use App\Http\Controllers\LotofacilController; 


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('v1/lotomania/concurso/{concurso}', [ConcursoController::class, 'concurso']);  // RETORNA CONCURSO ESPECIFICO

Route::get('v1/lotomania/concurso/last/{last}', [ConcursoController::class, 'getConcurso']); // RETORNA NUMERO E SUAS REPETICOES

Route::get('v1/lotomania/last/{last}', [ConcursoController::class, 'last']); // RETORNA TABELA DE RESULTADOS

// API LOTOFACIL

Route::get('v1/lotofacil/concurso/{concurso}', [LotofacilController::class, 'concurso']);  // RETORNA CONCURSO ESPECIFICO

Route::get('v1/lotofacil/concurso/last/{last}', [LotofacilController::class, 'getConcurso']); // RETORNA TABELA DE RESULTADOS

Route::get('v1/lotofacil/last/{last}', [LotofacilController::class, 'last']); // RETORNA NUMERO E SUAS REPETICOES