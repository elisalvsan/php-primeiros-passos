<?php

// ponto (.) no php concatena
$idade = 30;
//echo 'Olá mundo! Minha idade é ' . $idade . ' anos'; -> utilizando aspas simples

/* quando se utiliza aspas duplas o php detecta 
o que é texto e o que é variável

echo "Olá mundo! Minha idade é $idade anos";
*/

/*o php nao quebra linha sozinho, para isso se 
utiliza um caracter epecial, no caso \n 
obs.: sempre se coloca um caracter epecial dentro
de aspas duplas.

\n -> pula linha
\t -> tab horizontal

site: https://www.php.net/manual/pt_BR/language.types.string.php
*/

/*
se utilizar o php_eol ele vai pular a linha, dependendo
do sistema operacional
*/

echo "Olá mundo!" . PHP_EOL;
echo "Eu tenho $idade anos";

