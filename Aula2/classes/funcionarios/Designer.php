<?php

#Fala o local em que esta localizado
namespace classes\funcionarios;

#Chama a classe usuario para trabalhar dentro do arquivo atual
use classes\abstratas\Funcionario;

#Extende todos os valores do Funcionario
class Designer extends Funcionario {

	#Polimorfismo
	#Sobrepoem o metodo da classe pai
	/* bloqueado pelo uso do metodo final 
	public function aumentoSalario() {
		$this->salario *= 1.3;	
	}
	*/

	#Executando ela aqui, por que ela ficou abstrata, na classe pai
	public function getBonificacao(){
		return $this->salario * 0.5;
	}



}
?>
