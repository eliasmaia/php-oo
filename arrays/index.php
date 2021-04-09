<?php

require 'Calculadora.php';

$notas = array(8, 9, 10, 2, 6);

$calculadora = new Calculadora();
$media = $calculadora->calculaMedia($notas);

if ($media){
    echo "A média é: $media";
} else {
    echo "Não foi possível calcular a média";
}
