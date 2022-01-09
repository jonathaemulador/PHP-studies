<?php

$cidades = array(
    ['Nova York'    ,'NY',8175133],
    ['Los Angeles'  ,'CA',3792621],
    ['Chicago'      ,'IL',2695598],
    ['Houston'      ,'TX',2100263],
    ['Filadelfia'   ,'PA',1526006],
    ['Phonenix'     ,'AZ',1445632],
    ['San Antonio'  ,'TX',1327407],
    ['San Diego'    ,'CA',1307402],
    ['Dallas'       ,'TX',1197816],
    ['San Jose'     ,'CA',945942]
);

$total = 0; // totalizador para receber a população

$totalEstados = array(); // array para agrupar os estados

foreach($cidades as $coletaDados){
    
    $total += $coletaDados[2]; // soma tudo da posição 2 do array

    if (! array_key_exists($coletaDados[1], $totalEstados)) // Se não existir na posição do array 1 , insere em $totalEstados
    {
        $totalEstados[$coletaDados[1]] = 0; // insere o valor 0 se não existir ainda algum valor
    }

    $totalEstados[$coletaDados[1]] = $coletaDados[2]; // receba em $totalEstados na posicao do array 1 toda a população desse estado da posicao 2 do array

    print "$coletaDados[0] -  $coletaDados[1] -  $coletaDados[2]\n";  // mostra o array completo
}

echo "\n----População por estado-----\n";

foreach($totalEstados as $estados => $populacao){
    print "Estado : $estados - $populacao" . "\n"; // mostra a populacao por estado
}


