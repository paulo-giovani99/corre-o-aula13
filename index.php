<?php

require_once "Pessoa.php";

$c1 = new Pessoa("Paulo", "1438766655", "masculino", "3497778484" );

$this->setNome($nome);
$this->setCpf($cpf);
$this->setData($sexo);
$this->setSexo($telefone);

$c1->imprimir();