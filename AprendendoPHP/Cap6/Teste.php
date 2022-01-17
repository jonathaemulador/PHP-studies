<?php

class Cadastros {

    private string $nome;
    private int $telefone;


    function insereCadastro($nome, $telefone){
        $this->nome = $nome; // (SQL) INSERT INTO CADASTRO(NOME,TELEFONE) VALUES ($nome,$telefone);
        return "Voce foi cadastrado com sucesso!";
    }
}
