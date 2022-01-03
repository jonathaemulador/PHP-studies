<?php

/*
Escreva um programa PHP que use o operador de incremento (++) e o
operador de multiplicação combinado (*=) para exibir os numeros  de
1 a 5 e potência de 2 para 2 (2¹) a 32 (2^5). 
*/
$p = 2;
$x = 2;
for ($i = 1; $i <= 5; $i++){

        echo ("($x^$i) = $p \n");
        $p *= $x;
    }
