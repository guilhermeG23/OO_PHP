<?php

#Habilitando os erros em tela
ini_set("display_errors",1);

#Inclue todas as classes que for utilizar -> Ele carrega as classes que o arquivo esta usando
require_once "autoload.php";

#Instanciando o objeto
#So precisa usar o Use cas o a pagina estiver em um diretorio diferente do atual
#Nome do arquivo tem que ser o nome da classe por causa do autoload
use classes\funcionarios\Diretor;
use classes\funcionarios\Designer;
use classes\abstratas\Funcionario;
use classes\sistemaInterno\GerenciadorBonificacao;
#Chamando um arquivo de mesmo nome e apelidando para evitar conflitos
use classes\Diretor as TD;

#teste para confirmar que a pagina esta funcionando
#echo "teste";

#Forcando um erro pelo autoload
#$var= new Classe();
echo "<br>";
$diretor = new Diretor(111111, 1000.00);
var_dump($diretor);

echo "<br>";
$teste = new Teste();
var_dump($teste);

echo "<br>";
$designer = new Designer(111111);
var_dump($designer);

echo "<br>";
#Ele preserva o tipo, so altera o nome de chamada
$td = new TD();
var_dump($td);

#Quando o PHP tenta acessar um atributo que nao existe, ele cria o atributo

#Chamando uma funcao que vem da classe funcionario que esta entendida para a de designer
$diretor->aumentoSalario();
$designer->aumentoSalario();

#Apos a passada do aumento de salario
echo "<br>";
var_dump($diretor);
echo "<br>";
var_dump($designer);

#Uso de senhas
$diretor->senha="teste";
echo "<br>";
var_dump($diretor);

#Funcao ativada por heranca em cascatA
echo "<br>";
echo $diretor->autenticar("teste");
var_dump($diretor);

#Usando o funcionario
/* -> Vai retornar erro por que esta instanciando uma classe abstrata
	
echo "<br>";
$t1 = new Funcionario("1111222", 1200);
var_dump($t1);
*/

#Binificacao
echo "<br>";
$gerenciador = new GerenciadorBonificacao();
$gerenciador->AutentiqueAqui($diretor, "teste");
$gerenciador->registrar($diretor);
var_dump($gerenciador);
var_dump($gerenciador->getTotalBonificacoes());

#Autenticacao
/*
echo "<br>";
$desinger->senha="teste";
$gerenciador = new GerenciadorBonificacao();
$gerenciador->AutentiqueAqui($designer, "teste");
$gerenciador->registrar($designer);
var_dump($gerenciador->getTotalBonificacoes());
*/
?>
