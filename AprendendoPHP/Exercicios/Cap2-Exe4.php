<?php
/*
Escreva um programa PHP que configure a variavel $first_name com seu nome
e a $last_name com seu sobrenome. Exiba uma string contendo o seu nome e o
sobrenome separados por um espaço. exiba tambem o tamanho da string.
*/

$first_name = 'JONATHA';
$last_name = 'ARAUJO OLIVEIRA';

echo ("$first_name $last_name \n");

echo ("O tamanho Nome é : ");
echo (strlen($first_name));
echo ("\n O tamanho Sobrenome é : ");
echo (strlen($last_name));