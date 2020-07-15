<?php

$valueOne = 13;
$valueTwo = 5;

if ($valueOne < $valueTwo) {
    $aux = $valueOne;
    $valueOne = $valueTwo;
    $valueTwo = $aux;
}

if ($valueOne % $valueTwo == 0) {
    echo "<p>São múltiplos</p>";
} else {
    echo "<p>Não são múltiplos</p>";
}
