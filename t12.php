<?php

class TestT1 {
	public $t1 = 10;

	public function confirmT1($value) {
		if ($value == $this->t1) {
			echo "Deu certo" . PHP_EOL;
		} else {
			throw new Exception("Erro T1", 1);
		}
	}
}

$v1 = new TestT1();
try {
	$v1->confirmT1(11);
} catch(Exception $e) {
	echo $e->getMessage() . PHP_EOL;
	echo $e->getCode() . PHP_EOL;
	echo $e->getLine() . PHP_EOL;
	echo $e->getFile() . PHP_EOL;
}
