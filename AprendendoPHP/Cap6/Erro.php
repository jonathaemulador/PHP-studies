<?php

class Erro{
    public string $nome;
    public string $nome2;

    public function __construct($nome, $nome2){
        $this->nome = $nome;
        $this->nome2 = $nome2;

        return "$this->nome, $this->nome2";
    }

    public  function getMessage(){
        return "Errou muleke \n";
    }
}

try{
        $erro = new Erro('milk','super milk');
            if($erro->nome == 'milk2'){
                print "TOp";
                     }
    } catch (Exception $e) {
        print "\n Teste : " . $e->getMessage();
}
