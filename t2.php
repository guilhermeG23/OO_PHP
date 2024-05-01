<?php

class TestT2 {
	/*
	Ações em privado só podem ser mexidos dentro
	da classe, isso é, vc precisa de algum de 
	dentro para alterar os valores
	*/
	private $t1;
	
	/*
	get e set são só nomenclaturas, oq 
	vale mesmo é o conceito deles
	*/
	public function setT1($value) {
		$this->t1 = $value;
	}

	public function getT1() {
		return $this->t1;
	}
}

$t2_class = new TestT2();
$t2_class->setT1("teste t1");
echo $t2_class->getT1();
echo PHP_EOL;
echo "-------------------------" . PHP_EOL;


class FilterEmailTest {
	private $email;
	private $fixed_email = "teste@teste.com";

	public function setEmail($value) {
		$value = filter_var($value, FILTER_SANITIZE_EMAIL);
		$this->email = $value;
	}

	public function getEmail() {
		echo $this->email . PHP_EOL;
	}

	public function getFixedEmail() {
		echo $this->$fixed_email . PHP_EOL;
	}

	public function compareEmail() {
		echo var_dump($this->email == $this->fixed_email) . PHP_EOL;
	}
}

$filter_email_test = new FilterEmailTest();

$filter_email_test->setEmail("teste()\\\@gmail.com");
echo $filter_email_test->getEmail();
$filter_email_test->compareEmail();

$filter_email_test->setEmail("teste()\\\@teste.com");
echo $filter_email_test->getEmail();
$filter_email_test->compareEmail();
