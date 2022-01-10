<?php

/*
3 - Use for() para exibir uma tabela de equivalência de temperatura em graus Fahrenheit e Celsius
que vá de -50 a 50 graus F em incrementos de 5 graus. Na escala de graus Fahrenheit, a água congela a 32
graus e ferve a 212 graus. Na escala em Celsius, a àgua congela a 0 grau e ferve a 100 graus. Logo, para 
converter de Fahrenheit para Celsius, é preciso subtrair 32 graus da temperatura, multiplicar por 5 e
dividir por 9. Para converter de Celsius para Fahrenheit, multiplique por 9, divida por 5 e some por 32.
*/
/*
$t = -50;

while ($t <= 50){
    $c = ((($t - 32)*5)/9);
    echo ("($t)F° > "); printf(" (%.2f)C° \n" , $c);
    $t+= 5;
}
*/

for ($t = -50; $t <= 50; $t+=5){
    $c = ((($t - 32)*5)/9);
    echo ("($t)F° > "); printf(" (%.2f)C° \n" , $c);
}