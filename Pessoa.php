<?php
abstract class Pessoa{
    private $codigo;
    private $nome;
    private $cpf;
    private $sexo;
    private $telefone;

    public function __construct($codigo, $nome, $cpf, $sexo, $telefone)
    {
       $this->codigo = $codigo;
       $this->nome = $nome;
       $this->cpf = $cpf;
       $this->sexo = $sexo;
       $this->telefone = $telefone;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function imprimir() {
        echo "Codigo: " . $this->codigo . "<br>";
        echo "Nome: " . $this->nome . "<br>";
        echo "CPF: " . $this->cpf . "<br>";
        echo "sexo: " . $this->sexo . "<br>";
        echo "Telefone: " . $this->telefone . "<br>";
    }
}