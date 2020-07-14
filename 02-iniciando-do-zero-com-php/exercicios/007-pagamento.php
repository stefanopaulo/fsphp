<?php

$name = 'João Silva';
$hourlyValue = 50;
$workedHours = 60;
$payment = $hourlyValue * $workedHours;

echo "<p>Nome: {$name}</p>";
echo "<p>Valor por hora: {$hourlyValue}</p>";
echo "<p>Horas trabalhadas: {$workedHours}</p>";
echo "<p>O valor pago a {$name} deve ser de R$ " . number_format($payment, 2, ".", "") . ".</p>";
