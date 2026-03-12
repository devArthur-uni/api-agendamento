<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente as PacienteModel;

class PacienteController extends Controller
{
    public function index()
    {
        $pacientes = PacienteModel::all();

        return response()->json([
            "pacientes" => $pacientes
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'sobrenome' => 'required|string',
            'cpf' => 'required|string',
            'data_nascimento' => 'required|date'
        ]);

        $paciente = PacienteModel::create([
            "nome" => $request->nome,
            "sobrenome" => $request->sobrenome,
            "cpf" => $request->cpf,
            "data_nascimento" => $request->data_nascimento
        ]);

        return response()->json([
            "mensagem" => "Paciente cadastrado!",
            "paciente" => $paciente
        ]);
    }
}