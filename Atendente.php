<?php
require_once "Pessoa.php";

class Atendente extends Pessoa {
    private $salario;
    private $usuario;
    private $senha;

    public function __construct($salario, $usuario, $senha,$codigo, $nome, $cpf, $sexo, $telefone)
    {
        parent::__construct($codigo, $nome, $cpf, $sexo, $telefone);
        $this->salario = $salario;
        $this->usuario = $usuario;
        $this->senha = $senha;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }
    public function getUsuario() {
        return $this->usuario;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }
    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }


    public function imprimir()
    {
        parent::imprimir();
        echo "Salario: " . $this->salario . "<br>";
        echo "Usuario: " . $this->usuario . "<br>";
        echo "Senha: " . $this->senha . "<br>";
    }

    public function aumentarSalario($porcentagem) {
        if($porcentagem < 1 || $porcentagem)
        echo "Informe um valor entre 1 e 25% <br>";
    else
        $this->salario += $this->salario * ($porcentagem /100);
    }
}