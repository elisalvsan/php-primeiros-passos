<?php

$multiplicador = 12;

echo "TABUADA DE $multiplicador". PHP_EOL;
for ($i = 1; $i <= 10; $i++) {
    $tabuada = $multiplicador * $i;
    echo "$multiplicador X $i = " . $tabuada . PHP_EOL; 
}