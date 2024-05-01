<?php
require 'classes/t10.php';
require 'models/t10.php';

$t1 = new \classes\TestT1();
$t1->getT1();

$t2 = new \models\TestT1();
$t2->getT1();

// Normal -> use classes\TestT1;
// Apelido
use classes\TestT1 as Test10;

$t1 = new Test10();
$t1->getT1();

/* -> Só pode usar um use por vez de mesmo nome
use models\TestT1;
*/

use models\TestT1 as Test11;

$t1 = new Test11();
$t1->getT1();
