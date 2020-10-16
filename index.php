<?php


require_once "./Game.php";
$words = [
    "cachorro",
    "ratasana",
    "igreja",
    "expeliarmos",
    "hipopotamo",
    "responsabilidade",
    "pediatra",
    "programador",
    "habilitacao",
    "condominio",
    "ceifador",
    "catequismo",
    "industrial",
    "revolucao",
    "amantes",
    "velocidade",
    "eloquente",
    "bilingue",
    "terapauta",
    "jocelino",
    "strogonoff",
    "viagem",
    "pneumologista",
    "especialista",
    "Laser",
    "Torpedear",
    "celular",
    "computador",
    "cosmologia",
    "biologia"
];

$game = new Game(
    20,
    24, 
    10,//recomendado até 20 palavras, acima disso pode ocasionar lentidões por falta de espaço.
    $words);

$game->makeGame();
$game->renderGame();