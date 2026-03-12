<?php

namespace App\Domain;

class Medico
{
    private string $nome;
    private string $sobrenome;
    private string $crm;

    public function __construct(string $nome, string $sobrenome, string $crm)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->crm = $crm;
    }

    public function getNomeCompleto()
    {
        return $this->nome . ' ' . $this->sobrenome;
    }

    public function getCrm()
    {
        return $this->crm;
    }

    public function getInformacoes()
    {
        return [
            "nome_completo" => $this->getNomeCompleto(),
            "crm" => $this->crm
        ];
    }
}