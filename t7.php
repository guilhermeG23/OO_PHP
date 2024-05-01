<?php

class TestT1 {
	public static $t1;

	// Usa o self por motivos que o this
	// È para ser usado quando instancia
	// a classe
	public static function getT1() {
		echo "T1: " . self::$t1 . PHP_EOL;
	}
}

// Chamando a classe sem instanciar ela
TestT1::$t1 = 1;
TestT1::getT1();
