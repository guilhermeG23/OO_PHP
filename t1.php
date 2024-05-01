<?php

class TestT1 {
	public $t1;
	public $t2;
	public $t3;

	// Métodos/funcoes
	public function EchoT1() {
		echo "Echo T1";
	}

	// Chamar as variaveis dentro da classe
	public function EchoT2() {
		echo "t1: {$this->t1}, t2: {$this->t2} e t3: {$this->t3}";
	}
}

$value_testt1 = new TestT1();

echo $value_testt1->t1;

$value_testt1->t1 = "teste t1";
$value_testt1->t2 = "teste t2";
$value_testt1->t3 = "teste t3";

echo $value_testt1->t1;

echo var_dump($value_testt1);

$value_testt1->EchoT1();
echo PHP_EOL;
$value_testt1->EchoT2();
