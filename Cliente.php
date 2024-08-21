<?php
require_once 'Pessoa.php';

class Cliente extends Pessoa {
    private $limiteEmprestimo = 10;
    private $itensComOCliente = 0;

    public function __construct($codigo, $nome, $cpf, $sexo, $telefone, $limiteEmprestimo, $itensComOCliente)
    {
        parent:: __construct($codigo, $nome, $cpf, $sexo, $telefone);
        $this->limiteEmprestimo = $limiteEmprestimo;
        $this->itensComOCliente = $itensComOCliente;
    }

    public function getLimiteEmprestimo() {
        return $this->limiteEmprestimo;
    }

    public function setLimiteEmprestimo($limiteEmprestimo) {
        if($limiteEmprestimo > 0)
        $this->limiteEmprestimo = $limiteEmprestimo;
    }

    public function getItensComOCliente() {
        return $this->itensComOCliente;
    }

    public function setLimiteEmprestimo($itensComOCliente) {
        $this->itensComOCliente = $itensComOCliente;
    }

    public function imprimir()
    {
        parent::imprimir();
        echo "LimiteEmprestimo: " . $this->limiteEmprestimo . "<br>";
        echo "Itens com o cliente: " . $this->itensComOCliente . "<br>";
    }

    public function emprestarItem($qtdeitem) {
        if($qtdeitem > $this->limiteEmprestimo)
        echo" Quantidade de itens passou do limite";
    else if($qtdeitem < 0)
    echo "Informe um valor positivo <br>";
    else{
        $this->limiteEmprestimo -= $qtdeitem;
        $this->limiteEmprestimo += $qtdeitem;
    }
        
    }
    public function devolverItem($qtdeitem) {
        if($qtdeitem < 0)
        echo "Informe um valor positivo <br>";
        $this->limiteEmprestimo += $qtdeitem;
        $this->limiteEmprestimo -= $qtdeitem;
    }


}