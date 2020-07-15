<?php

$x = 0;
$y = 3.8;

echo "<p>Coordenada X: 4.5</p>";
echo "<p>Coordenada Y: -2.2</p>";

if ($x > 0 && $y > 0) {
    echo "<p>Q1</p>";
} elseif ($x < 0 && $y > 0) {
    echo "<p>Q2</p>";
} elseif ($x < 0 && $y < 0) {
    echo "<p>Q3</p>";
} elseif ($x > 0 && $y < 0) {
    echo "<p>Q4</p>";
} elseif ($x !== 0 && $y === 0) {
    echo "<p>Eixo X</p>";
} elseif ($x === 0 && $y !== 0) {
    echo "<p>Eixo Y</p>";
} else {
    echo "<p>Origem</p>";
}
