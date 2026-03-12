<?php

namespace App\Domain;

class Paciente
{
    private string $nome;
    private string $sobrenome;
    private string $cpf;
    private string $dataNascimento;

    public function __construct(
        string $nome,
        string $sobrenome,
        string $cpf,
        string $dataNascimento
    ) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->cpf = $cpf;
        $this->dataNascimento = $dataNascimento;
    }

    public function getNomeCompleto()
    {
        return $this->nome . ' ' . $this->sobrenome;
    }

    public function getInformacoes()
    {
        return [
            "nome_completo" => $this->getNomeCompleto(),
            "cpf" => $this->cpf,
            "data_nascimento" => $this->dataNascimento
        ];
    }
}