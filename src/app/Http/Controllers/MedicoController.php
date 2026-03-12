<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domain\Medico;

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
        $request->validate([
            'nome' => 'required|string',
            'sobrenome' => 'required|string',
            'crm' => 'required|string'
        ]);
        $nome = $request->input('nome');
        $sobrenome = $request->input('sobrenome');
        $crm = $request->input('crm');

        $medico = new Medico($nome, $sobrenome, $crm);

        return response()->json([
            "mensagem" => "Médico cadastrado!",
            "medico" => $medico->getInformacoes()
        ]);
    }
}
