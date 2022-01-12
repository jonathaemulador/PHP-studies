<?php

class Cadastro {
    public string $nome;
    public string $endereco;
    public int $numero;

}

class CadastroPessoa extends Cadastro {

    public int $cpf;

    public function __construct($nome, $endereco, $numero, $cpf){
        $this->nome     = $nome;
        $this->endereco = $endereco;
        $this->numero   = $numero;
        $this->cpf      = $cpf;

        print "Cadastro realizado com sucesso!" . "\n Nome: $nome \n CPF : $cpf \n Endereço: $endereco \n Numero: $numero \n";
    }

}

// Ação

$testeCadastro = new CadastroPessoa('Jonatha', 'Rua central', 10, 812234);
