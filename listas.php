<?php

$idadeLista = [26, 27, 31, 12, 37];

list($idadeVinicius, $idadeJoao, $idadeMaria) = $idadeLista;
unset($idadeLista[3]);

$idadeLista[] = 20;

foreach($idadeLista as $idade){
    echo $idade . PHP_EOL;
}