<?php

namespace classes\funcionarios;

#Desabilitado por nao aceitar heranca multipla
#use classes\abstratas\Funcionario;
use classes\abstratas\FuncionarioAutenticavel;

#PHP nao aceita multiplas herancas
class Diretor extends FuncionarioAutenticavel {

	#Por causa que a classe original que mantem o metodo o tornou abstrato, obriga a todos os que o executam, a manter um metodo executando, dentro que que o extende	
	public function getBonificacao(){
		return $this->salario * 0.5;
	}

}

?>
