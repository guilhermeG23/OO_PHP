<?php
// Referencia de obj
class TestT1 {
	public $t1;

	public function __clone() {
		echo "Obj clone" . PHP_EOL;
	}
}

$v1 = new TestT1();
$v1->t1 = 0;

$v2 = $v1;
$v2->t1 = 1;

echo $v1->t1 . PHP_EOL;

// Clone de um obj
// Copia o estado e repassa para variavel
$v3 = clone $v1;
$v3->t1 = 10;

echo $v1->t1 . PHP_EOL;
echo $v3->t1 . PHP_EOL;
