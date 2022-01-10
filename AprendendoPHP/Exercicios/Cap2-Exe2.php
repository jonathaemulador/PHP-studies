<?php
/*
Escreva um programa PHP que calcule o custo total desta refeição em um
restaurante: dois hambúrgueres a  4,95 dólares cada, um milk-shake de
chocolate a 1 dólar e 95 cents e um refrigerante a 85 cents. A alíquota
do imposto sobre a vendas é de 7,5% e é preciso pagar uma gorjeta pré-
imposto de 16%.
*/


$hamburge = 4.95;
$milkShake = 1.95;
$refrigerante = 0.85;
$imposto = 0.075;
$gorjeta = 0.16;

$somaItens = ($hamburge+$milkShake+$refrigerante);
$total = $somaItens + ($somaItens * $imposto) + ($somaItens * $gorjeta);

echo ($total);
