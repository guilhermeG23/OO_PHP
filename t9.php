<?php

/*
É um template de state para ser usado em outros trechos
Todos as funcoes tem que publicos
Vc tem que colocar os mesmos parametros do interface
no caras que importam ele
*/
interface TestT1 {
	public function getT1();
	public function getT2();
	public function getT3();
	public function getT4();
	public function getAll();
}

class TestT2 implements TestT1 {
	public $t1;
	public $t2;
	public $t3;
	public $t4;

	public function __construct($v1, $v2, $v3, $v4) {
		$this->t1 = $v1;
		$this->t2 = $v2;
		$this->t3 = $v3;
		$this->t4 = $v4;
	}

	public function getT1() {
		echo "T1: {$this->t1}" . PHP_EOL;
	}
	public function getT2() {
		echo "T2: {$this->t2}" . PHP_EOL;
	}
	public function getT3() {
		echo "T3: {$this->t3}" . PHP_EOL;
	}
	public function getT4() {
		echo "T4: {$this->t4}" . PHP_EOL;
	}
	public function getAll() {
		echo "T1: {$this->t1}" . PHP_EOL;
		echo "T2: {$this->t2}" . PHP_EOL;
		echo "T3: {$this->t3}" . PHP_EOL;
		echo "T4: {$this->t4}" . PHP_EOL;
	}
}

$test = new TestT2(1,2,3,4);
$test->getAll();
