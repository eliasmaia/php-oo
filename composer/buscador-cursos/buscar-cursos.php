#!/usr/bin/env php
<?php

require 'vendor/autoload.php';

use Alura\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => 'https://globoesporte.globo.com/']);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$materias = $buscador->buscar('futebol/times/vasco/');

foreach ($materias as $titulo) {
    exibeMensagem($titulo);
}
