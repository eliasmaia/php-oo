<?php

require_once 'funcoes.php';

$contasCorrentes = [
    '121.212.1' => [
        'titular' => 'Elias',
        'saldo' => 1000
    ],
    '333.222.3' => [
        'titular' => 'Maria',
        'saldo' => 26
    ],
    '412.223.3' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

$contasCorrentes['412.223.3'] = sacar($contasCorrentes['412.223.3'], 500);
$contasCorrentes['333.222.3'] = sacar($contasCorrentes['333.222.3'], 500);
$contasCorrentes['121.212.1'] = depositar($contasCorrentes['121.212.1'], 500);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
}
