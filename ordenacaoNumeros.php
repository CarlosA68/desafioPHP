<?php

$numbers = array(10,7,15,2,9);
sort($numbers);

$numeros = implode(',', $numbers);

echo "o array em ordem crescente é: $numeros";