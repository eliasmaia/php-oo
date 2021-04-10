<?php

require 'ArrayUtils.php';

$correntistas_e_compras = [
    "Giovanni",
    "João",
    12,
    "Maria",
    37,
    "Luisa",
    26
];

echo "<pre>";
var_dump($correntistas_e_compras);

ArrayUtils::remover("Giovanni", $correntistas_e_compras);
ArrayUtils::remover("Giovannnnni", $correntistas_e_compras);

var_dump($correntistas_e_compras);
echo "<pre>";