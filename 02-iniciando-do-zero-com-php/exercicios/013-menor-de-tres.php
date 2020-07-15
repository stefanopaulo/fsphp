<?php

$valueOne = 12;
$valueTwo = 5;
$valueTrhee = 5;

echo "<p>Primeiro Valor: {$valueOne}</p>";
echo "<p>Segundo Valor: {$valueTwo}</p>";
echo "<p>Terceiro Valor: {$valueTrhee}</p>";

if ($valueOne < $valueTwo && $valueTwo < $valueTrhee) {
    $smaller = $valueOne;
} elseif ($valueTwo < $valueTrhee) {
    $smaller = $valueTwo;
} else {
    $smaller = $valueTrhee;
}

echo "<p>MENOR = {$smaller}</p>";
