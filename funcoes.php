<?php

function exibir_Mensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
}

$idade = 20;

exibir_Mensagem("Idade atual: $idade");

function modifica(&$a)
{ // '&' indica receber o parametro por referencia da variavel no parametro (não mais uma copia)
    exibir_Mensagem('Internamente (antes): ' . $a);
    $a = 100;
    exibir_Mensagem('Internamente (depois): ' . $a);
}

modifica($idade);
exibir_Mensagem($idade);

exibir_Mensagem('-------------------------------------------------------');

function calcula_idade($ano_de_nascimento)
{
    return date('Y') - $ano_de_nascimento;
}

exibir_Mensagem("Sua idade é: " . calcula_idade(1990));
exibir_Mensagem('-------------------------------------------------------');

function fatorial($n) // o parametro vezes seu valor -1, consecutivamente até 0
{
    if ($n == 0) {
        return 1;
    } else {
        return $n * fatorial($n - 1);
    }
}

exibir_Mensagem('O fatorial de 10 é ' . fatorial(10));
exibir_Mensagem('-------------------------------------------------------');

// armazena uma função dentro de uma variavel
$dobro = function($x){
    return $x * 2;
};

exibir_Mensagem("O dobro de 20 é: " . $dobro(20)); // resultado dobro
exibir_Mensagem('-------------------------------------------------------');

array_map(function($x){ return $x * 2;}, [0,1,2])

?>