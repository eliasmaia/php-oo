<?php

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

$contasCorrentes['412.223.5'] = [
    'titular' => 'Tiedemann',
    'saldo' => 500
];

foreach($contasCorrentes as $cpf => $conta){
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}
