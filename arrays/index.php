<?php

$saldos = [
    2500,
    3000,
    745,
    123,
    9999,
    433
];

foreach ($saldos as $saldo){
    echo "<p>O saldo é $saldo</p>";
}

sort($saldos);

echo "O menor saldo é $saldo[0]";