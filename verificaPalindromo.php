<?php

function validaPalindromo($texto){
 $textoValidado = strrev($texto);

 if($texto == $textoValidado){
    echo "O texto é um palindromo";
 }
 else{
    echo("o texto nao é um palindromo");
 }
}

$textoUsuario = readline("Digite um texto:");
echo validaPalindromo($textoUsuario);
