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


asort($cidades);

echo "\n ----Ordene a lista por população" . "\n\n";

foreach($cidades as $cidade => $pessoas){
    print "Pessoas: $pessoas - Cidade: $cidade  " . "\n";
}

ksort($cidades);

echo "\n ----Ordene a lista por cidade em ordem alfabetica----- " . "\n\n";

foreach($cidades as $cidade => $pessoas){
    print "Cidades: $cidade - Pessoas: $pessoas " . "\n";
}