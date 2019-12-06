<?php

namespace classes\abstratas;

#Deixando a classe abstrata, somente aqueles que entender ela terao acesso as suas funcoes
#Nao é possivel acessar a mesma diretamente 
abstract class Funcionario{
	#Atributos
	/* -> Publicos	
	public $nome;
	public $cpf;
	public $salario;
	*/

	#protegidos pelo protected
	#Permite que todos os que tenham instanciado ele, permitam modificalo
	protected $nome;
	protected $cpf;
	protected $salario;

	#Valores estaticos
	#Valor nao varia
	const piso = 1000;

	#Construtor 
	#É possivel fazer sobrecargar nos metodos, porem diferente de outras linguagens
	#Define valor default no segundo parametro, se nao receber o valor na construcao, ele carrega o padrao definido
	#Nao é possivel acessar uma variavel quando o metodo nao foi construido ainda
	public function __construct($cpf, $salario = self::piso) {
		$this->cpf=$cpf;
		$this->salario=$salario;
	}

	#Funcoes para os filhos herdarem
	/*
	 * Tornando o metodo abstrato
	 * Obriga que todos que os herdam implementem ele 
	public function getBonificacao() {
		return $this->salario * 0.5;
	}
	*/
	abstract public function getBonificacao();

	#public function aumentoSalario() {
	#Usado o final, todos os podem herdar, mas nenhum pode sobscrever
	final public function aumentoSalario() {
		$this->salario *= 1.5;
	}


}
