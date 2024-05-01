<?php

class TestT3 {
	private $t1;
	private $t2;
	private $t3;

	/*
	Funcao inicializada no momento que a class
	é instanciada -> Estado inicial da class
	*/
	public function __construct($v1, $v2, $v3) {
		$this->t1 = $v1;
		$this->t2 = $v2;
		$this->t3 = $v3;	
	}

	public function getAll() {
		echo "T1: {$this->t1}" . PHP_EOL;
		echo "T2: {$this->t2}" . PHP_EOL;
		echo "T3: {$this->t3}" . PHP_EOL;
	}
}

$class = new TestT3(1,2,3);
$class->getAll();
