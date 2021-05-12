<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client();
$resposta = $client->request('GET', 'https://www.alura.com.br/cursos');

$html = $resposta->getBody();

$crawler = new Crawler($html);
$crawler->addHtmlContent($html);
$cursos = $crawler->filter('span.card-curso__nome');

foreach ($cursos as $curso){
    echo $curso->textContent . $PHP_EOL;
}
