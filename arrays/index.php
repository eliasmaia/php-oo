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

echo "O saldo do Giovanni é: {$relacionados["Giovanni"]}";

if(array_key_exists("João", $relacionados)){
    echo "O saldo do João é: {$relacionados["João"]}";  
} else {
    echo "Não foi encontrado";
}