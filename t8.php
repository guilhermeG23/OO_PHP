<?php
// Uso de polimorfismo

class TestT1 {
	public function EchoTest() {
		echo "Testt1" . PHP_EOL;
	}
}

class TestT2 extends TestT1 {
	public function EchoTest() {
		echo "Testt2" . PHP_EOL;
	}
}


$t1 = new TestT2();
$t1->EchoTest();
