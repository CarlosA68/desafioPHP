<?php

function somaNumeros($soma)
{
    $numero = 0;
    for ($cont = 0; $cont <= $soma; $cont++) {
        $numero += $cont;
    }
    return $numero;
}

$numeroUsuario = readline("Digite um numero:");
echo somaNumeros($numeroUsuario);


