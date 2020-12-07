<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\NotaController;

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
    return view('login');
});

Route::resource('turmas', TurmaController::class);
Route::resource('alunos', AlunoController::class);
Route::post('notas/update', [NotaController::class, 'update'])->name('notas.update');
Route::get('notas/{disciplinaid}/{alunoid}', function($disciplinaid, $alunoid){
    return view('notas.edit', ['disciplinaid' => $disciplinaid, 'alunoid' => $alunoid]);
})->name('notas.edit');
