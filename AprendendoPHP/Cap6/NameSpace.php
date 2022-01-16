<?php

namespace Servicos;

class Residencial {
    public static function casa($numero){
        print "\n Parabens o numero de sua casa é $numero \n";
    }
}

$mostrar = Residencial::casa(10);

echo($mostrar);