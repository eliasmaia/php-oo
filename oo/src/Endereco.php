<?php

class Endereco
{

    private $cidade;
    private $rua;
    private $bairro;
    private $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->rua = $rua;
        $this->bairro = $bairro;
        $this->numero = $numero;
    }
    
    public function getCidade(): string
    {
        return $this->cidade;
    }

    public function getRua(): string
    {
        return $this->rua;
    }

    public function getBairro(): string
    {
        return $this->bairro;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }

}   
