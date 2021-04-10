<?php

$nomes = "Capello, Trapattoni, Ancelotti, Sacchi, Sarri, Allegri";

/* Explode - Separando*/
$array_nomes = explode(", ", $nomes);

foreach($array_nomes as $nome){
    echo "<p>Olá, $nome!</p>";
}


/* Implode - Juntando */
$nomes_juntos = implode(", ", $array_nomes);
echo "$nomes_juntos";