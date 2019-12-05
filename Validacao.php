<?php

class Validacao {
	public static function protegendoAtributos($atributo) {
		if($atributo == "titular" || $atributo == "saldo") {
			#Retornando execao
			throw new Exception("Valor travado a edicao direta");
			#return false;
		}
	}

	#Validando se o valor é numerico
	public static function valorNumerico($valor) {
		if(!is_numeric($valor)) {
			throw new Exception("Valor nao e numerico");
		}	
	}
}
