<?php

#Cap 2 - Dados: trabalhando com texto e números

#Definindo Strings

#now document '
#here document "

// Apenas String
print ('Olá mundo'); 

// String + comandos
print ("\n Olá mundo 2 \n"); 

// Use \ para usar uma aspa simples em sua string (Conhecido como caractere de escape)
print ('Quero usar \' uma aspa simples no meio do texto'); 

print ("\n");

// Escape "\" na sequencia o que quero usar "\"
print ('Quero usar \\ uma barra '); 

// Digitando senha com espaço
$senha = ' MinhaSenha123 ';

// Exibindo senha
echo ("\n $senha \n");

#trim()
// removendo espaços no inicio e no fim
echo (trim($senha)); 

#strlen()
// validando o tamanho da senha digitada
if (strlen($senha) < 5){
    echo ("\n Sua senha é menor que 5 caracteres \n");
    echo (strlen($senha));
} else {
    echo ("\n Sua senha é maior que 5 caracteres \n");
    echo (strlen($senha));
}

#strlen() + trim()
// Validando senha e removendo espaços
if (strlen(trim($senha)) > 5 ){
    echo ("\n Otimo você tem uma senha boa! \n");
} else {
    echo ("sua senha deve ter pelo menos 6 caracteres \n");
}

// recebendo valor igual
$email = 'jonathaemulador@gmail.com';

#strcasecmp
// Utilizando "strcasecmp" para ignorar o Key Sensitive
if (strcasecmp($email, 'jonathaemulador@gmail.Com') == 0){
    printf("\n Olá Jonatha é você mesmo!");
} else {
    printf("\n Desculpe você não é o Jonatha! \n");
}

// print (Saída Comum) printf (Saída Formatada)

// Formatando tipo 1
$price = 5; $tax = 0.075;

printf('O R$ $%.2f', $price * (1 + $tax));

// Formatando tipo 2

$dias = 365;

$dia = 03;

$mes = 01;

$ano = 2022;


printf("\n Em um ano temos %02d dias e a data de hoje é %02d/%02d/%d", $dias, $dia, $mes, $ano);

# strtolower()

$nome = 'ANDREA';
echo ("\n");
echo (strtolower($nome));

# strltoupper()
$nome2 = 'ada katarina';
echo ("\n");
echo (strtoupper($nome2));
echo ("\n");

# ucwords()
// formatando nomes com ucwords
echo ucwords(strtolower($nome2));
echo ("\n");
// usando substr

$texto = 'Olá mundo, seja bem vindos a 2022 !';
echo ("\n");
echo substr($texto, 0 , 10); // Inicie da posição "0" , até a "10" e extraia os bytes

// comecando do fim ao inicio com substr

echo ("\n");
echo substr($texto, -6); // Mostre os ultimos 6 bytes do texto

# str_replace()

$meuTexto = 'Uma nova historia de jhon wick ?';

echo str_replace("jhon wick", "Jhon Wick 2", $meuTexto); // Pegue isso, subistitua por aquino , nessa variavel

#Definindo Numeros

$n1 = 10; $n2 = 5;

// Soma

$soma = $n1 + $n2;
echo ("\n"); 
echo(" $soma ");
echo ("\n");

// Subtracao

$sub = $n1 - $n2;
echo ("\n"); 
echo(" $sub ");
echo ("\n");

// Multiplicacao

$mult = $n1 * $n2;
echo ("\n"); 
echo(" $mult ");
echo ("\n");

// Exponenciação

$exp = $n1 ** $n2;
echo ("\n"); 
echo(" $exp ");
echo ("\n");

// Divisao

$div = $n1 / $n2;
echo ("\n"); 
echo(" $div ");
echo ("\n");

// Divisao com resto;

$divR = $n2 % $n1;
echo ("\n"); 
echo(" $divR ");
echo ("\n");

