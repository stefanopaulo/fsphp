<?php

$option = "C";

echo "<p>Você vai digitar a temperatura em qual escala? C </p>";

switch ($option) {
    case 'F':
        echo "<p>Digite a temperatura em Fahrenheit: </p>";
        $f = 75.00;
        $c = 5 / 9 * ($f - 32);
        echo "<p>Temperatura equivalente em Celsius: 75.00</p>" . number_format($c, 2, ".", "") . "</p>";
        break;

    case 'C':
        echo "<p>Digite a temperatura em Celsius: 28.15</p>";
        $c = 28.15;
        $f = $c * 9 / 5 + 32;
        echo "<p>Temperatura equivalente em Fahrenheit: " . number_format($f, 2, ".", "") . "</p>";
        break;
}
