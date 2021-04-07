<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cuestionarios', [App\Http\Controllers\CuestionarioController::class, 'index']);
Route::get('/cuestionarios/create', [App\Http\Controllers\CuestionarioController::class, 'create']);
Route::post('/cuestionarios', [App\Http\Controllers\CuestionarioController::class, 'store']);
Route::get('/cuestionarios/{cuestionario}', [App\Http\Controllers\CuestionarioController::class, 'show']);
Route::get('/cuestionarios/{cuestionario}/edit', [App\Http\Controllers\CuestionarioController::class, 'edit']);
Route::patch('/cuestionarios/{cuestionario}', [App\Http\Controllers\CuestionarioController::class, 'update']);
Route::delete('/cuestionarios/{cuestionario}', [App\Http\Controllers\CuestionarioController::class, 'destroy']);




Route::get('/cuestionarios/{cuestionario}/preguntas/create', [App\Http\Controllers\PreguntaController::class, 'create']);
Route::post('/cuestionarios/{cuestionario}/preguntas', [App\Http\Controllers\PreguntaController::class, 'store']);
Route::get('/cuestionarios/preguntas/{pregunta}/edit', [App\Http\Controllers\PreguntaController::class, 'edit']);
Route::patch('/cuestionarios/preguntas/{pregunta}', [App\Http\Controllers\PreguntaController::class, 'update']);
Route::delete('/cuestionarios/preguntas/{pregunta}', [App\Http\Controllers\PreguntaController::class, 'destroy']);

Route::get('/cuestionarios/preguntas/{pregunta}/respuestas/create', [App\Http\Controllers\RespuestaController::class, 'create']);
Route::post('/cuestionarios/preguntas/{pregunta}/respuestas', [App\Http\Controllers\RespuestaController::class, 'store']);


Route::delete('/cuestionarios/{cuestionario}/respuestas/{respuesta}', [App\Http\Controllers\RespuestaController::class, 'destroy']);
