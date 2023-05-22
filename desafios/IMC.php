<?php

/*Menor que 18.5 - Abaixo do peso ;
Entre 18.5 e 24.9 - Peso normal ;
Entre 25.0 e 29.9 - Pré-obesidade ;
Entre 30.0 e 34.9 - Obesidade Grau 1 ;
Entre 35.0 e 39.9 - Obesidade Grau 2 ;
Acima de 40 - Obesidade Grau 3

imc = peso / (altura x altura)*/

$peso = 51.0;
$altura = 1.65;
$imc = $peso / $altura ** 2;

echo "Seu IMC é de $imc. Você está com o IMC ";

if($imc <18.5){
    echo "abaixo do peso.";
}else if ($imc < 25){
    echo "peso normal.";
}else if ($imc < 30) {
    echo "pré-obesidade.";
}else if ($imc < 35){
    echo "Obesidade Grau 1.";
}else if ($imc < 40){
    echo "Obesidade Grau 2.";
}else {
    echo "Obesidade Grau 3.";
}
