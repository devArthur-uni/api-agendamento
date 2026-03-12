<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domain\Consulta;

class ConsultaController extends Controller
{

    public function index()
    {
        return response()->json([
            "consultas" => []
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'paciente_id' => 'required|integer',
            'medico_id' => 'required|integer',
            'data' => 'required|date_format:Y-m-d H:i'
        ]);
        $pacienteId = $request->input('paciente_id');
        $medicoId = $request->input('medico_id');
        $data = $request->input('data'); //Aqui está sendo enviado a data e hora juntas, ex: "2024-06-30 14:00"

        // separar data e hora
        $dataHora = explode(" ", $data);

        $dataConsulta = $dataHora[0];
        $horaConsulta = $dataHora[1] ?? "00:00";

        $consulta = new Consulta(
            $dataConsulta,
            $horaConsulta,
            $medicoId,
            $pacienteId
        );

        return response()->json([
            "mensagem" => "Consulta agendada!",
            "consulta" => $consulta->getInformacoes()
        ]);
    }
}
