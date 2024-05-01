<?php

// Composição

class TestT1 {
	public function showValue($value) {
		return "Value: " . $value;
	}
}

class TestT2 {
	public $testt1;
	public $value;

	public function __construct($v1) {
		$this->testt1 = new TestT1();
		$this->value = $v1;
	}

	public function localShowName() {
		echo $this->testt1->showValue($this->value) . PHP_EOL;

	}
}

$tt2 = new TestT2(1);
$tt2->localShowName();
