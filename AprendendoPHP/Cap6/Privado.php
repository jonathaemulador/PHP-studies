<?php

class Privado {
    private int $saldo = 0;
    protected int $extra = 100;

  // metodo acessor
    function getSaldo(){
        return $this->saldo;
    }

    function getExtra(){
        return $this->extra;
    }

}

$mostraSaldo = new Privado;



echo(" Saldo: " . $mostraSaldo->getSaldo() . "\n"); // Pode ser acessada só atravez de método acessor
echo(" Extra: " . $mostraSaldo->getExtra() . "\n"); // Pode ser acessada só atravez de método acessor alem de que tem que ser nessa classe ou uma classe que extenda essa mesma.