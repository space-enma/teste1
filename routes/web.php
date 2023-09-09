<?php

use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\ContatController;

Route::get('/', [ContatController::class, 'index']);

Route::get('/contatos', [ContatController::class, 'form']);
Route::post('/contatos', [ContatController::class, 'store']);

Route::get('/servico', [ContatController::class, 'servico']);
Route::get('/welcome', [ContatController::class, 'welcome']);
Route::get('/contats', [ContatController::class, 'contats']);
Route::get('/equipe', [ContatController::class, 'equipe']);
Route::get('/sobre', [ContatController::class, 'sobre']);
Route::get('/politica', [ContatController::class, 'politica']);

