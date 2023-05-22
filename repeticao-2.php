<?php

//pular para a proxima execução
for ($contador = 1; $contador <= 15; $contador++) {
    if ($contador == 13) {
        continue;
    }
    echo "#$contador" . PHP_EOL;
}

//quebra o loop
for ($contador = 1; $contador <= 15; $contador++) {
    if ($contador == 13) {
        break;
    }
    echo "#$contador" . PHP_EOL;
}