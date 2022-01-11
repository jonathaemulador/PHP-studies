<?php

class Carro{
    public string $modelo;
    public string $cor;

    public function __construct($modelo, $cor){
        $this->modelo = $modelo;
        $this->cor = $cor;

        print " Modelo : $this->modelo \n Cor: $this->cor \n ";
    }

}

$carro = new Carro('Gol','Preto');