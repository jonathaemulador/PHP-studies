<?php

// Definindo a classe cliente

class Cliente{
    public string $nome;
    public string $cpf;
    public int $agencia;
    public int $conta;

    // método

    function cadastrarCliente($nome, $cpf) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        return ("\n NOME: $this->nome\n CPF: $this->cpf \n");
    }

    // método estatico

    public static function funcaoEstatica(){
        return " Só testando a função estatica ";
    }

    // método construtor

    public function __construct($conta){
        $this->conta = $conta;

        return $conta;
    }
}

// instancia de uma classe

$cliente = new Cliente;

// instancia de um método estatico de uma classe

$estatico = Cliente::funcaoEstatica();

// impressoes -> instancia de uma classe

echo($cliente->cadastrarCliente('Jonatha','000000'));

// impressoes -> instancia de um método estatico de uma classe

echo($estatico);

// alterando dados

$cliente->cpf = '0101010202';

echo(" Novo CPF: " . $cliente->cpf);

