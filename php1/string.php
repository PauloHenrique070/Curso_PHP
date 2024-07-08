<?php 

$idade = 25;

echo "Minha idade é $idade anos" . PHP_EOL; //Aspas duplas identifica variável de forma inteligente, PHP_EOL serve para pular linha.


echo 'Minha idade é '. $idade .' anos' . "\n"; //aspas simples não identifica a variável sem o ponto ".".

echo "Eu tenho \"$idade\" anos"; // exibir as aspas.