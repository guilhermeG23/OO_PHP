<?php

namespace classes\interfaces;

use classes\abstratas\FuncionarioAutenticavel;

#Classes que implementam interface, herdam toda a interface
#Todos os metodos criados pela interface devem ser herdados para que herdar esta interface
interface Autenticavel{

	#Declarando assinaturas
	public function AutentiqueAqui(FuncionarioAutenticavel $funcionario, $senha);

}

?>
