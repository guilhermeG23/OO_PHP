<?php

include("Validacao.php");
include("ContaCorrente.php");

#$conta = new ContaCorrente();

#var_dump($conta);
#Não é possivel imprimir um objeto


#Acessando atributos
#Acessando por referencia
/*
$conta->titular="1111";
$conta->agencia="2222";
$conta->numero="4444";
$conta->saldo=500.00;
 */

#Passando parametros dos construtor
$conta1 = new ContaCorrente("GRB1", "1000", "2000", 400.00);
$conta2 = new ContaCorrente("GRB2", "1000", "2000", 400.00);

#$conta->setSacar(300);
#var_dump($conta);

#$conta->setDepositar(500);
#var_dump($conta);

#Encadear metodos
#$conta->setSacar(300)->setDepositar(1000);
#var_dump($conta);

#proibindo este cara de ser executado por causa do if
#$conta->titular="Pastel";

var_dump($conta1);

echo $conta1->getSaldo();

#Se colocar String aqui da erro por que so aceita valores numericos
$conta1->transferir("12",$conta2);

var_dump($conta1);
var_dump($conta2);

echo $conta1;

echo $conta2;

echo $conta2->setSacar(100);
var_dump($conta2);

echo $conta2;

#echo ContaCorrente::protegendoAtributos("saldo");

/*
echo "<br>";
echo $conta->getTitulo() . "<br>";
echo $conta->getAgencia() . "<br>";
echo $conta->getNumero() . "<br>";
echo $conta->getSaldo() . "<br>";

#usando funcao set
$conta->setTitular("Pastel");

echo "<br>";
echo $conta->getTitulo() . "<br>";
echo $conta->getAgencia() . "<br>";
echo $conta->getNumero() . "<br>";
echo $conta->getSaldo() . "<br>";
 */
