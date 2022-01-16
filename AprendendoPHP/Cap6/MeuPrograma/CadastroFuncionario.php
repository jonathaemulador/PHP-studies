<?php

namespace MeuPrograma\Cadastro;

require_once("Cadastro.php");

class Funcionario extends Cadastro
{
    protected int    $codFuncionario;
    protected string $login;
    protected string $senha;


    public function __construct(int $codFuncionario, string $login, string $senha, string $nome, string $email, string $end_bairro, string $end_rua, int $end_numero, int $telefone)
    {
        //Cadastro
        $this->nome = $nome;
        $this->email = $email;
        $this->end_rua = $end_rua;
        $this->end_bairro = $end_bairro;
        $this->end_numero = $end_numero;
        $this->telefone = $telefone;
        //Funcionario
        $this->codFuncionario = $codFuncionario;
        $this->login = $login;
        $this->senha = $senha;

        return array($codFuncionario, $login, $senha);
    }

    function getFuncionario(){
        return "    \n -- FUNCIONARIO --
                    \n $this->codFuncionario
                    \n $this->login
                    \n $this->senha \n $this->nome";
    }

}

$cadastrarFuncionario = new Funcionario(1,'1','1','JOAO','JOAO@JOAO2.COM','BAIRRO 13', 'CENTRO',23,32324444);

echo($cadastrarFuncionario->getFuncionario());
