<?php

$salary = 2500;

if ($salary <= 1000) {
    $percentage = 20;
} elseif ($salary <= 3000) {
    $percentage = 15;
} elseif ($salary <= 8000) {
    $percentage = 10;
} else {
    $percentage = 5;
}

$increase = $salary * $percentage / 100;
$newSalary = $salary + $increase;

echo "<p>Salário: {$salary}</p>";
echo "<p>Aumento: {$increase}</p>";
echo "<p>Novo Slário: {$newSalary}</p>";
echo "<p>Porcentagem: {$percentage}</p>";
