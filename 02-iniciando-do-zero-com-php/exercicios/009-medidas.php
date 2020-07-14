<?php

$a = 4.0;
$b = 3.5;
$c = 5.2;

$squareArea = $a * $a;
$triangleArea = $a * $b / 2;
$trapezeArea = ($a + $b) / 2 * $c;

echo "<p>Area do Quadrado: " . number_format($squareArea, 4, ".", "") . "</p>";
echo "<p>Area do Triângulo: " . number_format($triangleArea, 4, ".", "") . "</p>";
echo "<p>Area do Trapezio: " . number_format($trapezeArea, 4, ".", "") . "</p>";
