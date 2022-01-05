<?php

#Capitulo 4 - Grupo de dados - trabalhando com arrays


// Para criar um array() precisa criar uma lista chave/valor 
/*
$variavel = array( chave => valor);
*/
$vegetais = array(
    'brocolis' => 'verde',
    'beterraba' => 'roxo',
    'cenoura' => 'amarelo',
    'alfase' => 'verde'
);

$cidades = array(
    0 => 'Sao Paulo',
    1 => 'Rio de Janeiro',
    2 => 'Brasilia'
);

// array com sintaxe curta

$estados = [0 => 'Goias', 2 => 'Tocantins', 3 => 'Maranhao'];

// adicionando um novo elemento

$estados[1] = 'Distrito Federal';


// array "sem chave" será inserido pelo engine PHP automaticamente

$listaProdutos = array(
    'Ref Coca-cola',
    'Ref Guarana',
    'Ref Sprite'
);

echo($listaProdutos[0] . "\n");

$qualTamanho = count($listaProdutos);

print "O tamanho da lista é $qualTamanho" . "\n";

// percorrer o array com foreach()

foreach($listaProdutos as $lista => $produtos){ // estou definindo key ($lista), value ($produtos)
    print("$lista - $produtos" . "\n");
}

// percorrer o array com for

for ($i = 0, $listaFOR = count($listaProdutos); $i <= $listaFOR; $i++){
    print "$i - $listaProdutos[$i]" . "\n";
}

// Obs: foreach não garante a lista ordenada , no for sim


// usando in_array

$foods = array(
    'Pastel' => 8.00,
    'Coxinha' => 5.00,
    'Biscoito' => 3.00, 
    'Ref' => 2.50
);

// quero algo que custe apenas 3 

if (in_array(2.5, $foods)){
    $valorX = in_array(2.5, $foods); // Usei essa varial apenas para perceber que o valor é 1 "verdadeiro"
    print "Temos sim um produto com esse valor $valorX" . "\n";
} else print "Não temos com esse valor";


// usando array_search() - diferente do in_array ele não retorna apenas 1 , e sim o valor do array caso seja verdade

if (array_search(5, $foods)){
    $valorY = (array_search(5, $foods));
    print "Temos sim um produto com esse valor é o produto: $valorY" . "\n";
} else print "Não temos com esse valor";
