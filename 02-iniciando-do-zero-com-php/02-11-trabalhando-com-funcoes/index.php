<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.11 - Trabalhando com funções");

/*
 * [ functions ] https://php.net/manual/pt_BR/language.functions.php
 */
fullStackPHPClassSession("functions", __LINE__);

require __DIR__."/functions.php";

var_dump(funtionName("Pearl Jam", "AC/DC", "Alter Bridge"));
var_dump(funtionName("Robson", "Kauê", "Gustavo"));

var_dump(optionArgs("Robson"));
var_dump(optionArgs("Robson", "Kauê"));
var_dump(optionArgs("Robson", "Kauê", "Gustavo"));

/*
 * [ global access ] global $var
 */
fullStackPHPClassSession("global access", __LINE__);

$weigth = 86;
$heigth = 1.83;
echo calcIMC();

/*
 * [ static arguments ] static $var
 */
fullStackPHPClassSession("static arguments", __LINE__);

$pay = payTotal(200);
$pay = payTotal(150);
$pay = payTotal(500);

echo $pay;

/*
 * [ dinamic arguments ] get_args | num_args
 */
fullStackPHPClassSession("dinamic arguments", __LINE__);

var_dump(myTeam("Kauê", "Gustavo", "Gah", "João"));
