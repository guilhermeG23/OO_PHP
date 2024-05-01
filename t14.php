<?php

// Relação entre objetos
// Agregação

class TestT1 {
	public $t1;
	public $t2;

	public function __construct($val1, $val2) {
		$this->t1 = $val1;
		$this->t2 = $val2;
	} 
}

class TestT2 {
	public $testt1;

	public function addT(TestT1 $value) {
		$this->testt1[] = $value;
	}

	public function getT() {
		foreach ($this->testt1 as $values) {
			echo $values->t1 . " - " . $values->t2 . PHP_EOL;
		}
	}
}


$pt1 = new TestT1(1,2);
$pt2 = new TestT1(3,4);
$pt3 = new TestT1(5,6);
$pt4 = new TestT1(7,8);

$tt2 = new TestT2();
$tt2->addT($pt1);
$tt2->addT($pt2);
$tt2->addT($pt3);
$tt2->addT($pt4);

$tt2->getT();
