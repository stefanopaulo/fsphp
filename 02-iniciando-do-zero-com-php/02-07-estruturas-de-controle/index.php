<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.07 - Estruturas de controle");

/*
 * [ if ] https://php.net/manual/pt_BR/control-structures.if.php
 * [ elseif ] https://php.net/manual/pt_BR/control-structures.elseif.php
 * [ else ] https://php.net/manual/pt_BR/control-structures.else.php
 */
fullStackPHPClassSession("if, elseif, else", __LINE__);

$test = true;

if ($test) {
    var_dump(true);
} else {
    var_dump(false);
}

$age = 16;

if ($age < 20) {
    var_dump("Bandas Coloridas");
} elseif ($age < 50) {
    var_dump("Ótimas Bandas");
} else {
    var_dump("Rock and Roll Raíz");
}

$hour = 15;

if ($hour >= 5 && $hour < 23) {
    if ($hour < 7) {
        var_dump("Bob Maley");
    } else {
        var_dump("Alter Bridge");
    }
} else {
    var_dump("ZzzzzzzZZZZ");
}

/*
 * [ isset ] https://php.net/manual/pt_BR/function.isset.php
 * [ empty] https://php.net/manual/pt_BR/function.empty.php
 */
fullStackPHPClassSession("isset, empty, !", __LINE__);

$rock = "";

// verifica se a variável existe
if (isset($rock)) {
    var_dump("Rock And Roll!");
} else {
    var_dump("Die");
}

$rockAndRoll = "AC/DC";

// verifica se a variável existe e tem valor
if (!empty($rockAndRoll)) {
    var_dump("Rock existe e toca {$rockAndRoll}");
} else {
    var_dump("Não existe ou não está tocando!");
}

/*
 * [ switch ] https://secure.php.net/manual/pt_BR/control-structures.switch.php
 */
fullStackPHPClassSession("switch", __LINE__);

$payment = "past_due";

switch ($payment) {
    case "billet_printed":
        var_dump("Boleto Impresso");
    break;

    case "canceled":
        var_dump("Pagamento Cancelado");
    break;
    
    case "past_due":
    case "pending":
        var_dump("Aguardando Pagamento");
    break;
    
    case "approved":
    case "completed":
        var_dump("Pagamento Aprovado");
    break;

    default:
        var_dump("Erro ao processar pagamento!");
    break;
}