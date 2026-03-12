<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicoController extends Controller
{
    public function index()
    
    {
        return response()->json([
            "medicos" => []
        ]);
    }

    public function store(Request $request)
{
    $nome = $request->input('nome');
    $sobrenome = $request->input('sobrenome');
    $crm = $request->input('crm');

    return response()->json([
        "mensagem" => "Médico cadastrado",
        "medico" => [
            "nome" => $nome,
            "sobrenome" => $sobrenome,
            "crm" => $crm
        ]
    ]);
}
}
