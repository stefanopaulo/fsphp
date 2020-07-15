<?php

$numberOfMinutes = 103;

echo "<p>Quantidade de minutos: {$numberOfMinutes}</p>";

if ($numberOfMinutes <= 100) {
    $payment = 50;
} else {
    $payment = ($numberOfMinutes - 100) * 2 + 50;
}

echo "<p>Valor a pagar: " . number_format($payment, 2, ".", "") . "</p>";
