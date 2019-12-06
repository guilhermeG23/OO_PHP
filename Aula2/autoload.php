<?php

function load($namespace) {
	#Altera as barras
	$namespace = str_replace("\\","/",$namespace);
	#Include o __DIR__ que é o diretorio atual 
	$caminhoABS = __DIR__ . "/" . $namespace . ".php";
	#Require o local
	return include_once $caminhoABS;
}

#Todo objeto instanciado é carregado no autoload 
#Todo o new passa por aqui para ser executado
spl_autoload_register(__NAMESPACE__ . "\load");
?>
