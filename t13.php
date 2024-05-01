<?php

// Assosiacao de classes

class TestT1 {
	public $t1;
	public $t10;
}

class TestT2 {
	public $t2;
}

$v1 = new TestT1();
$v2 = new TestT2();

$v2->t2 = 11;

$v1->t1 = 10;
$v1->t10 = $v2;

$values = [
	't1' => $v1->t1,
	't10' => $v1->t10->t2
];

echo var_dump($values);
