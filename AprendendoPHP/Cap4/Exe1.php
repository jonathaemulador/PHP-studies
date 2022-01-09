<?php

$cidades = array(
    'Nova York'   => 8175133,
    'Los Angeles' => 3792621,
    'Chicago'     => 2695598,
    'Houston'     => 2100263,
    'Filadelfia'  => 1526006,
    'Phonenix'    => 1445632,
    'San Antonio' => 1327407,
    'Dallas'      => 1197816,
    'San Jose'    => 945942
);

$total = 0;

foreach($cidades as $cidade => $pessoas){
    $total += $pessoas;
    print "Cidade: $cidade - Pessoas: $pessoas " . "\n";
}

print "Total de pessoas de todas as cidades: $total";

