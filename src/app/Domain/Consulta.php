<?php

namespace App\Domain;

class Consulta
{
    private string $data;
    private string $hora;
    private string $medicoId;
    private string $pacienteId;

    public function __construct(
        string $data,
        string $hora,
        string $medicoId,
        string $pacienteId
    ) {
        $this->data = $data;
        $this->hora = $hora;
        $this->medicoId = $medicoId;
        $this->pacienteId = $pacienteId;
    }

    public function getInformacoes()
    {
        return [
            "data" => $this->data,
            "hora" => $this->hora,
            "medico_id" => $this->medicoId,
            "paciente_id" => $this->pacienteId
        ];
    }
}