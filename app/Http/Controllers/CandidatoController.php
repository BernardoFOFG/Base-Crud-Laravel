<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use Illuminate\Http\Request;

class CandidatoController extends Controller
{
    public function index()
    {
    }

    public function create(Request $request)
    {
        Candidato::create([
            'nome' => $request->nome_candidato,
            'telefone' => $request->telefone_candidato,
        ]);
        return redirect('/');
    }
}
