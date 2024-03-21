<?php

$nota1 = readline("Digite a primeira nota:");
$nota2 = readline("Digite a segunda nota:");

if ($nota1 <= 10 && $nota1 >= 0) {
    if($nota2 <= 10 && $nota2 >=0){
        $media = ($nota1 + $nota2) /2;
        echo "A media é $media";
    }
    else{
        echo "notas invalidas";
    }
}
else{
    echo "nota invalida";
}



   
   
   
   
   // if ($nota2 >= 10 && $nota2 >= 0) {
    //    $media = $nota1 + $nota2 / 2;
    //    echo "A média entre $nota1 e $nota2 é $media";
  //  } else {
 //       echo "nota2 invalida";
  //  }
//} else {
  //  echo "nota 1 invalida";
//}