<?php

$nomes = ["Andre", "Bruno", "Carlos", "Diego", "Eduardo"];

$nomes [] = "Adriano"; // adicionando elemento na array (final da array)

foreach ($nomes as $nome) { // "for" - percorre a array
    echo $nome . PHP_EOL;
}
echo count($nomes) . PHP_EOL; // quantidade de indices dentro da array.