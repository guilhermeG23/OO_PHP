<?php

class BaseStates {
	// Publico
	// Dentro e fora da class tem acesso
	public $t1;
	public $t2;

	// Protegido
	// É como o private, más pode ser extendido
	protected $t3;
	protected $t4;

	// Private
	// Esse aqui é só dentro da classe que o criou
	// Fora isso, sem acesso
	private $t5;
	private $t6;

	// Esses estados tmb s]ão validos para as
	// funcoes

	public function getAllPublic() {
		echo "T1: {$this->t1}" . PHP_EOL;
		echo "T2: {$this->t2}" . PHP_EOL;
	}

	public function getAllProtected() {
		echo "T3: {$this->t1}" . PHP_EOL;
		echo "T4: {$this->t2}" . PHP_EOL;
	}

	public function setAllPublic($v1, $v2) {
		$this->t1 = $v1;
		$this->t2 = $v2;
	}

	public function setAllProtected($v3, $v4) {
		$this->t3 = $v3;
		$this->t4 = $v4;
	}
}

/*
Extends permite vc usar as ações de outra
classe dentro na atual
È bem util criar classes de ações gerais e fazer
a importação delas para dentro de classes
expecificas
*/
class TestT1 extends BaseStates {
	
}

$t1 = new TestT1();
$t1->setAllPublic(1,2);
$t1->getAllPublic();

$t1->setAllProtected(1,2);
$t1->getAllProtected();
