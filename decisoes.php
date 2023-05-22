<?php

$idade = 17;
$numeroDePessoas =2;

echo "Você só pode entrar se tiver a partir de 18 anos ou ";
echo "a partir de 16 anos acompanhado.". PHP_EOL;

if($idade >= 18 ){
    echo "Você tem $idade anos. Pode entrar sozinho(a).";
}else if($idade>=16 && $numeroDePessoas > 1){
    echo "Você tem $idade anos e está acompanhado(a). Pode entrar.";
}else
    echo "Você só tem $idade anos. Não pode entrar.";


echo PHP_EOL . "Adeus";
/*
    || or -> ou
    && and -> e

    ==
    !=
    >=
    <=
*/