<?php 

class TestT1 {
	private $t1;

	public function __set($t1, $value) {
		$this->t1 = $value;
	}

	public function __get($t1) {
		return $this->t1;
	}
}

$tt1 = new TestT1();
$tt1->t1 = "teste";
echo $tt1->t1 . PHP_EOL;

class TestT2{
	private $array_t2 = array();

	public function __set($key_value, $value) {
		$this->array_t2[$key_value] = $value;
	}

	public function __get($key_value) {
		return $this->array_t2[$key_value];
	}

	public function __tostring() {
		return "Chamada do TestT2";
	}

	public function __invoke() {
		return "Tentou chamada obj como funcao";
	}
}

$tt2 = new TestT2();

$tt2->t1 = "teste1";
$tt2->t2 = "teste2";
$tt2->t3 = "teste3";

echo $tt2->t1 . PHP_EOL;
echo $tt2->t2 . PHP_EOL;
echo $tt2->t3 . PHP_EOL;

echo $tt2 . PHP_EOL;
echo $tt2() . PHP_EOL;

