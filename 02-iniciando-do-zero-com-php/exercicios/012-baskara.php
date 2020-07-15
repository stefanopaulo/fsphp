<?php

$a = 0;
$b = 3;
$c = 4;
$delta;
$x1;
$x2;

echo "<p>Coeficiente A: {$a}</p>";
echo "<p>Coeficiente B: {$b}</p>";
echo "<p>Coeficiente C: {$c}</p>";

if ($a == 0) {
    echo "<p>NÃO EXISTEM RAIZES REAIS</p>";
} else {
    $delta = pow($b, 2) - 4 * $a * $c;

    if ($delta < 0) {
        echo "<p>NÃO EXISTEM RAIZES REAIS</p>";
    } else {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);

        echo "<p>X1 = " . number_format($x1, 4, ".", "") . "</p>";
        echo "<p>X2 = " . number_format($x2, 4, ".", "") . "</p>";
    }
}
