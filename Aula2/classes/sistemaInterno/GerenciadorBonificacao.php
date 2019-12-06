<?php

namespace classes\sistemaInterno;

use classes\abstratas\Funcionario;
use classes\interfaces\Autenticavel;
use classes\abstratas\FuncionarioAutenticavel;

class GerenciadorBonificacao implements Autenticavel{
	
	private $totalBonificacoes;

	private $autenticacao;

	#Somente alguem que herde a classe funcionario pode acionar este metodo
	public function registrar(Funcionario $funcionario) {
		if($this->autenticacao) {
			$this->totalBonificacoes += $funcionario->getBonificacao();	
		}else{
			#tem que colocar a \ para ele entender que nao e para procurar uma externa e sim que e um metodo interno
			throw new \Exception("Nao esta autenticado");
		}
	}
	
	public function getTotalBonificacoes() {
		return $this->totalBonificacoes;	
	}

	#Chamando o metodo que esta herdado pelo implements
	public function AutentiqueAqui(FuncionarioAutenticavel $funcionario, $senha) {
		/*
		if($funcionario->senha == $senha) {
			$this->autenticacao = true;
		}
		*/
		$this->autenticacao = $funcionario->autenticar($senha);

	}
}

?>
