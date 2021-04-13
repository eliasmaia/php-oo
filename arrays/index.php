<?php

$correntistas = [
    "Giovanni",
    "João",
    "Maria",
    "Luisa",
];

$saldos = [
    10000,
    70000,
    64222,
    3211
];

$relacionados = array_combine($correntistas, $saldos);

echo $relacionados["Giovanni"];

$relacionados["Matheus"] = 4500;

echo "<pre>";
var_dump($relacionados);
echo "</pre>";