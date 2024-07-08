<?php 

$idade = 17;

echo "Você só pode entrar se tiver mais de 18 anos. \n";

if ($idade >= 18) {
    echo "Você tem $idade anos. \nPode entrar";

} else {
    echo "Você não pode entrar, só tem $idade anos \n";
}

$mensagem = $idade < 18 ? 'Você é menor de idade' : 'Você é maior de idade';

echo $mensagem;