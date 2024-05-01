<?php

// Classe de modelo para demais classes
// Vc adiciona o abstract para definir ela
// Como modelo e após isso, ela não pode mais
// Ser instanciada e todo mundo que extender ela,
// Todas as funcoes setadas como abstrats, terao
// De ser instancias para dentro das classes filhas
abstract class TestT1 {
	protected $t1;
	protected $t2;

	abstract protected function setAll($v1, $v2);
	abstract protected function getAll();
}


class TestT2 extends TestT1{

	public function setAll($v1, $v2) {
		$this->t1 = $v1;
		$this->t2 = $v2;
	}

	public function getAll() {
		echo "T1: {$this->t1}" . PHP_EOL;
		echo "T2: {$this->t2}" . PHP_EOL;	
	}
}

$callT2 = new TestT2();
$callT2->setAll(1,2);
$callT2->getAll();
