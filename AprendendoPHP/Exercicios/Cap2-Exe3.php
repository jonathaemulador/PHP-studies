<?php
/*
Modifique a solução anterior que deu ao exercicio anterior para exibir uma conta
formada. Para cada item da refeição, exiba o preço, a quantidade e o custo total.
Exiba o total bruto referente à comida e ás bebidas, o total pós-imposto e o total
com imposto e a gorjeta. Certifique-se de que os preços de sua saída fiquem alinhados
verticalemente.
*/
$item1Descricao = 'Hamburge';
$item2Descricao = 'Milk-Shake';
$item3Descricao = 'Refrigerante';

$item1Qtd = 1;
$item2Qtd = 1;
$item3Qtd = 1;

$item1Preco = 4.95;
$item2Preco = 1.95;
$item3Preco = 0.85;

$imposto = 0.075;
$gorjeta = 0.16;

$calItem1 = ($item1Preco*$item1Qtd);
$calItem2 = ($item2Preco*$item2Qtd);
$calItem3 = ($item3Preco*$item3Qtd);

$calItens = ($calItem1 + $calItem2 + $calItem3);

$totalItem1 = (($itemImposto1 = $calItem1 + ($item1Imp = $imposto * $calItem1)) + ($calItem1 * $gorjeta));
$totalItem2 = (($itemImposto2 = $calItem2 + ($item2Imp = $imposto * $calItem2)) + ($calItem2 * $gorjeta));
$totalItem3 = (($itemImposto3 = $calItem3 + ($item3Imp = $imposto * $calItem3)) + ($calItem3 * $gorjeta));

$totalGeral = $totalItem1 + $totalItem2 + $totalItem3;

echo ("----------------------Lista de Produtos------------------------\n");
echo ("| Descrição produto | Qtd | Preco | Total do item | % Imposto | $ Imposto | Item com Imposto | Gorjeta | Total Geral | \n");
echo ("| $item1Descricao          |  $item1Qtd  | $item1Preco  | $calItem1          | $imposto     | $item1Imp   | $itemImposto1          | $gorjeta    | $totalItem1 \n");
echo ("| $item2Descricao        |  $item2Qtd  | $item2Preco  | $calItem2          | $imposto     | $item2Imp   | $itemImposto2          | $gorjeta    | $totalItem2  \n");
echo ("| $item3Descricao      |  $item3Qtd  | $item3Preco  | $calItem3          | $imposto     | $item3Imp   | $itemImposto3          | $gorjeta    | $totalItem3  \n");
echo ("| ----------------------|\n");
echo ("| Total : R$ $totalGeral    |\n");
echo ("| ----------------------|\n");