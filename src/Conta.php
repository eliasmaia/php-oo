<?php

class Conta
{
    private  $cpfTitular;
    private  $nomeTitular;
    private  $saldo = 0;

    public function saca(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorASacar;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function setCpfTitular(string $cpf): void
    {
        $this->cpfTitular = $cpf;
    }

    public function getCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    public function setNomeTitular(string $nome): void
    {
        $this->nomeTitular = $nome;
    }

    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }
}