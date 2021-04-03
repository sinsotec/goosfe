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
Route::get('/cuestionarios/{cuestionario}/edit', [App\Http\Controllers\CuestionarioController::class, 'edit']);
Route::get('/cuestionarios/{cuestionario}', [App\Http\Controllers\CuestionarioController::class, 'show']);

Route::get('/cuestionarios/{cuestionario}/preguntas/create', [\App\Http\Controllers\PreguntaController::class, 'create']);
Route::post('/cuestionarios/{cuestionario}/preguntas', [\App\Http\Controllers\PreguntaController::class, 'store']);