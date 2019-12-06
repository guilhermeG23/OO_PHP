<?php

namespace classes\abstratas;

use classes\abstratas\Funcionario;

#Corfirmar senha
abstract class FuncionarioAutenticavel extends Funcionario{

	public $senha;

	public function autenticar($senha) {
		if ($senha == "teste") {
			return true;
		}
		return false;
	}
}

?>
