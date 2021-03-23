<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta("123069456-53", "Elias de Moraes");
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->getNomeTitular() . PHP_EOL;
echo $primeiraConta->getCpfTitular() . PHP_EOL;
echo $primeiraConta->getSaldo() . PHP_EOL;

echo Conta::getNumeroDeContas();
