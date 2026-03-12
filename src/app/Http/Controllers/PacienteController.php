<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domain\Paciente;

class PacienteController extends Controller
{

    public function index()
    {
        return response()->json([
            "pacientes" => []
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'sobrenome' => 'required|string',
            'cpf' => 'required|string',
            'data_nascimento' => 'required|date_format:Y-m-d'
        ]);
        $nome = $request->input('nome');
        $sobrenome = $request->input('sobrenome');
        $cpf = $request->input('cpf');
        $dataNascimento = $request->input('data_nascimento');

        $paciente = new Paciente(
            $nome,
            $sobrenome,
            $cpf,
            $dataNascimento
        );

        return response()->json([
            "mensagem" => "Paciente cadastrado!",
            "paciente" => $paciente->getInformacoes()
        ]);
    }
}
