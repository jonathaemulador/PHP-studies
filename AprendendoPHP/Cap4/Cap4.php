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

// quero algo que custe apenas 2,5

if (in_array(2.5, $foods)){
    $valorX = in_array(2.5, $foods); // Usei essa varial apenas para perceber que o valor é 1 "verdadeiro"
    print "Temos sim um produto com esse valor $valorX" . "\n";
} else print "Não temos com esse valor";


// usando array_search() - diferente do in_array ele não retorna apenas 1 , e sim o valor do array caso seja verdade

if (array_search(5, $foods)){
    $valorY = (array_search(5, $foods));
    print "Temos sim um produto com esse valor é o produto: $valorY" . "\n";
} else print "Não temos com esse valor";

$usuario = array(
    'Jonatha' => 123,
    'Andrea' => 321,
    'Ada' => 456,
    'Ivoneide' => 01001
);

echo "\n \n";

foreach ($usuario as $nome => $senha){
    print "$nome - $senha" . "\n";
}

// utilizando unset 
unset($usuario['Jonatha']);

echo "\n \n";

foreach ($usuario as $nome => $senha){
    print "$nome - $senha" . "\n";
}

// mostrar toda a lista do array com implode

$listaPessoas = array('Ada', 'Andrea', 'Bruno', 'Celso');

$mostraLista = implode(' , ', $listaPessoas);

print ("$mostraLista" . "\n");

// utilizanso explode contrario de implode (defina o separador e mostre na posição desejada)

$listaPessoas2 = 'Ada, Andrea, Bruno, Celso';

$mostraLista2 = explode(', ', $listaPessoas2);

print ("mostra lista $mostraLista2[1]" . "\n \n");

// usando sort


$veiculos = array('Moto','Carro','Caminhao');
$veiculosPreco = array('Moto' => 1000,'Carro' => 2000,'Caminhao' => 3000);

echo " ----MOSTRA ARRAY---- \n";

foreach($veiculos as $tipo => $valor){
    print (" \$veiculos: $tipo  - $valor" . "\n");
}

echo " ----MOSTRA ARRAY ASSOCIATIVO---- \n";

foreach($veiculosPreco as $tipo => $valor){
    print (" \$veiculosPreco: $tipo  - $valor" . "\n");
}

echo "\n";

sort($veiculos);
sort($veiculosPreco);

echo " ----MOSTRA ARRAY C/SORT---- NÃO HOUVE MUDANÇA \n";

foreach($veiculos as $tipo => $valor){
    print (" \$veiculos: $tipo  - $valor" . "\n");
}

echo " ----MOSTRA ARRAY ASSOCIATIVO C/SORT ---- SUBIST. O VALOR STRING POR NUMERICO \n";

foreach($veiculosPreco as $tipo => $valor){
    print (" \$veiculosPreco: $tipo  - $valor" . "\n");
}

// utilizando asort - classifica o arry pelo valor do elemento

$listaTratores = array(
    600 => 'valtra',
    5000 => 'massey ferguson',
    1000 => 'john deere'
);

echo ("--- Mostrando array normal S/ASORT ---" . "\n");

foreach($listaTratores as $key => $value){
    print "\$listaTratores : $key - $value " . "\n";
}

echo ("--- Mostrando array com ASORT - ordena pelo maior valor ---" . "\n");

asort($listaTratores);

foreach($listaTratores as $key => $value){
    print "\$listaTratores : $key - $value " . "\n";
}

// utilizando ksort

echo ("--- Mostrando array com KSORT - ordena pela chave---" . "\n");

ksort($listaTratores);

foreach($listaTratores as $key => $value){
    print "\$listaTratores : $key - $value " . "\n";
}

// lembrando que existe os rsort , arsort() e krsort() - "forma decrescente"


# array multidimensionais

// 1º - forma

$pratos = array(
    'Arroz especial' => ['Arroz','Cebolinha'],
    'Caldo velho' => ['Caldo quente', 'Carne vermelha'],
    'Carne seca' => ['Carne de sol', 'Tempero especial'],
    'Cuscuz top' => ['Cuscuz', 'Sal']
);

print "\n" . $pratos['Caldo velho'][0] . "\n\n"; // Mostrar array 1 posicao 0

foreach($pratos as $chave => $valor){
    foreach($valor as $item => $composicao){
        print " \$pratos: $chave - Item -> $item --> $composicao" . "\n";
    }
}

// 2º - forma

$estoque2 = [[3,'Leite',50],
             [4,'Nescal',20],
             [5,'Toddy',0],
             [6,'Produto sem estoque']];

print "\n" . $estoque2[2][1]; // Mostrar o array 2 na posicao 1 

// 3º - forma

$estoque3 = array('Grupo_I' => array('Banana' => 100,'Manga' => 200),
                  'Grupo_II' => array('Melancia' => 10,'Melao' => 300),
                  'Grupo_III' => array('Uva' => 1500,'Cereja' => 250));

print "\n" . $estoque3['Grupo_I']['Manga']; // Mostrar o valor de Manga do Grupo_I

// utilizando foreach com array multidimensional

foreach($estoque3 as $grupo => $key){
    foreach($key as $itens => $valor){
        print "\n" . " \$estoque3 : $grupo -> $itens -> $valor" . "\n";
    }
}

// utilizando for para array multidimensional

$carros = array( array('Gol', 'Uno', 'Celta'),
                 array('Saveiro','Strada','Montana'));

for($contador = 0, $tamanho = count($carros); $contador < $tamanho; $contador++){
    for($novoContador = 0, $novoTamanho = count($carros[$contador]); $novoContador < $novoTamanho; $novoContador++){
        print "Lista: [$contador][$novoContador] -> {$carros[$contador][$novoContador]}\n";
    }
}

