<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medico as MedicoModel;

class MedicoController extends Controller
{
    public function index()
{
    $medicos = MedicoModel::all();

    return response()->json([
        "medicos" => $medicos
    ]);
}

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'sobrenome' => 'required|string',
            'crm' => 'required|string'
        ]);

        $medico = MedicoModel::create([
            "nome" => $request->nome,
            "sobrenome" => $request->sobrenome,
            "crm" => $request->crm
        ]);

        return response()->json([
            "mensagem" => "Médico cadastrado!",
            "medico" => $medico
        ]);
    }
}