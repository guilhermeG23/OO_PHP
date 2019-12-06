<?php

#Criando a classe
class ContaCorrente {

	#Atributos
	/*
	public $titular;
	public $agencia;
	public $numero;
	public $saldo;
	 */
	private $titular;
	private $agencia;
	private $numero;
	private $saldo;

	#Private tratava tudo dentro da classe, so membros dentro da classe
	#tem acesso sobre os mesmos

	#Metodos magicos -> Usa __ na frente do nome da funcao
	#So use __ em metodos magicos ou quando voce quiser criar um proprio

	#Construtor
	public function __construct($titular, $agencia, $numero, $saldo) {
		$this->titular=$titular;
		$this->agencia=$agencia;
		$this->numero=$numero;
		$this->saldo=$saldo;	
	}

	#this libera acesso a toda a classe e metodos
	#O encadeamento funciona porque o this retorna a classe em si, 
	#dando acesso a toda a classe e seus metodos

	#Abrindo acesso externo a classe para modificar os atributos
	public function setTitular($titular) {
		$this->titular=$titular;
		return $this;
	}
	public function setAgencia($agencia) {
		$this->agencia=$agencia;
		return $this;
	}
	public function setNumero($numero) {
		$this->numero=$numero;
		return $this;
	}

	#Incrementando funcoes abaixo para somente para somente aceitar valores numericos

	#PHP nao se preocupa com return de funcao
	public function setSacar($valor) {
		Validacao::valorNumerico($valor);
		$this->saldo=$this->saldo-$valor;
		#boa pratica de return
		return $this;
	}
	public function setDepositar($valor) {
		Validacao::valorNumerico($valor);
		$this->saldo=$this->saldo+$valor;
		return $this;
	}

	#Classes publicas para acessar os valores
	/*
	public function getTitulo() {
		return $this->titular;
	}
	public function getAgencia() {
		return $this->agencia;
	}
	public function getNumero() {
		return $this->numero;
	}
	public function getSaldo() {
		return $this->saldo;
	}
	*/

	#Proteger as funcoes é bom, porque sabe que é so naquele local
	#que determinada funcao é executada
	#Determinada o nivel de seguranca e manutencao

	#Abaixo são os metodos magicos para editar e acessar valores privados

	#Disparado automaticamente quando a classe é chamada
	#possibilidade de ver os valores das variaveis
	public function __get($atributo) {
		#Usando metodo private ou public
		#$this->protegendoAtributos($atributo);
		#Usando metodo static
		#ContaCorrente::protegendoAtributos($atributo);
		#Usando o metodo que foi para outra classe
		Validacao::protegendoAtributos($atributo);
		return $this->$atributo;
	}

	#Setar valores com set
	public function __set($atributo,$valor) {
		#$this->protegendoAtributos($atributo);
		#ContaCorrente::protegendoAtributos($atributo);
		Validacao::protegendoAtributos($atributo);
		$this->$atributo=$valor;
	}

	#protegendo os atributos
	#metodo que não necessita ser usado fora da classe

	#Exemplo de encapsulamento
	#Sabe que so esta classe usa este metodo 
	#public function protegendoAtributos($atributo) {
	#Uso do private para travar dentro da classe
	#private function protegendoAtributos($atributo) {
	#Uso do static -> Acessar sem criar uma instancia 
	/* -> Movido para validacao
	public static function protegendoAtributos($atributo) {
		if($atributo == "titular" || $atributo == "saldo") {
			#Retornando execao
			throw new Exception("Valor travado a edicao direta");
			#return false;
		}
	}
	*/

	#Formatando o valor
	#Encapsulado
	private function formataSaldo() {
		return "R$: " . number_format($this->saldo,2,",",".");
	}

	public function getSaldo() {
		return $this->formataSaldo();
	}

	#Transferir valores
	#Obriga que seja uma classe o segundo parametro
	#PHP é fracamente tipado, não precisa obrigar o parametro a ser um valor 
	public function transferir($valor, ContaCorrente $conta) {
		#Mesmo se o valor em string tiver caracter int ou float o php converte por si mesmo
		#Caso tiver letra ou alguma coisa no meio, ele vai dar erro
		/* -> Funcao foi exportada para o validacao.php
		if(!is_numeric($valor)) {
			echo("Entrada nao é numerico");
		}
		 */
		#Funcao no validacao
		Validacao::valorNumerico($valor);
		#This -> Conta atual
		$this->setSacar($valor);
		#Conta -> Conta alvo a receber o valor
		$conta->setDepositar($valor);
		return $this;
	}

	#Evita a mostragem de um erro da classe quando usado uma echo ou chamada
	#Limitado a somente o retorno do tipo string
	public function __toString() {
		#Funciona
		#return "Funcionou!";
		#Casting -> Inteiro para string
		return (string)$this->saldo;
	}
}
