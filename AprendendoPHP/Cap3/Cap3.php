<?php

#Capitulo 3 - Lógica - tomada de decisões e repetições

$senha = '123a';

if ($senha === '123a'){
    echo ("Senha correta, pode entrar \n");
} else echo ("Senha errada, não pode entrar \n");


#While

// looping

while ($i <= 10){
    printf("<option>$i</option> \n");
    $i++;
}

#for

for ($f = 1; $f <= 10; $f++){
    printf("<option>$f</option> \n");
}