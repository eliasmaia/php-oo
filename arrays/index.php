<?php declare(strict_types=1);

namespace Alura;

spl_autoload_register();

$correntistas_e_compras = [
    "Giovanni",
    "João",
    12,
    "Maria",
    37,
    "Luisa",
    26,
    "12"
];

echo "<pre>";
var_dump($correntistas_e_compras);

ArrayUtils::remover(12, $correntistas_e_compras);


var_dump($correntistas_e_compras);
echo "<pre>";