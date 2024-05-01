<?php

class TestT1 {
	const t1 = "teste";

	/*
	Self é a chamada na propria instancia
	Isso é, ele vai pegar o T1 que está
	Dentro da propria classe
	*/
	public function getT1() {
		echo self::t1 . PHP_EOL;
	}
}

class TestT2 extends TestT1 {
	const t1 = "teste1";

	// COmo o self chama a propria instancia,
	// O valor a ser amostrado é o teste1
	public function getT1() {
		echo self::t1 . PHP_EOL;
	}

	// O parent pega da class pai
	public function getT2() {
		echo parent::t1 . PHP_EOL;
	}
}

$testt1 = new TestT1();
$testt1->getT1();


$testt2 = new TestT2();
$testt2->getT1();
$testt2->getT2();
