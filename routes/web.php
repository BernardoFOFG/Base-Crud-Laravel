<?php

use App\Http\Controllers\CandidatoController;
use App\Models\Candidato;
use Illuminate\Http\Request;
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
    $candidatos = Candidato::all();
    return view('welcome', ['candidatos' => $candidatos]);
});

Route::get('/cadastro', function () {
    return view('cadastro');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/cadastrar-candidato', function () {
    return view('criar-candidato');
});

Route::post('/cadastrar-candidato', [CandidatoController::class, 'create']);

Route::get('/mostrar-candidato/{id_candidato}', function ($id_candidato) {
    $candidato = Candidato::findOrFail($id_candidato);
    echo $candidato->nome;
    echo $candidato->telefone;
});

Route::get('/editar-candidato/{id_candidato}', function ($id_candidato) {
    $candidato = Candidato::findOrFail($id_candidato);
    return view('editar-candidato', ['candidato' => $candidato]);
});

Route::put('/atualizar-candidato/{id_candidato}', function (Request $request, $id_candidato) {
    $candidato = Candidato::findOrFail($id_candidato);
    $candidato->nome = $request->nome_candidato;
    $candidato->telefone = $request->telefone_candidato;
    $candidato->save();

    return redirect('/');
});

Route::get('/excluir-candidato/{id_candidato}', function ($id_candidato) {
    $candidato = Candidato::findOrFail($id_candidato);
    $candidato->delete();

    return redirect('/');
});
