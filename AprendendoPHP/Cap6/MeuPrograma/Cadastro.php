<?php

namespace MeuPrograma\Cadastro;

class Cadastro{
    
    private string $nome;
    private string $email;
    private string $end_rua;
    private string $end_bairro;
    private int $end_numero;
    private int $telefone;

    function __construct(string $nome, string $email, string $end_bairro, string $end_rua, int $end_numero, int $telefone){
        $this->nome = $nome;
        $this->email = $email;
        $this->end_rua = $end_rua;
        $this->end_bairro = $end_bairro;
        $this->end_numero = $end_numero;
        $this->telefone = $telefone;

        return array($nome, $email, $end_bairro, $end_numero, $end_rua, $telefone);
    }

    function getCadastro() {
        print " \n -- CADASTRO
                \n $this->nome
                \n $this->email
                \n $this->end_rua
                \n $this->end_bairro
                \n $this->end_numero
                \n $this->telefone";
            }
    
}

// teste na classe


$novoCadastro = new Cadastro('JONATHA', 'jonatha@gmail.org', 'Centro', 'Rua 01', 10, 88887777);


echo($novoCadastro->getCadastro());
