<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{
    private $titular;
    protected $saldo;
    private static $numeroDeContas;

    public function __construct(Titular $titular)
    {   
        $this->titular = $titular;
        $this-> saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function saca(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
    }

    abstract public function percentualTarifa(): float;

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }    

    public function getSaldo(): float
    {
        return $this->saldo;
    }
    
    public function getCpfTitular(): string
    {
        return $this->titular->getCpf();
    }

    public function getNomeTitular(): string
    {
        return $this->titular->getNome();
    }

    public static function getNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

}