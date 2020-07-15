<?php

$glucose = 143.2;

echo "<p>Medida da Glicose: {$glucose}</p>";

if ($glucose <= 100) {
    echo "<p>Classificação: normal</p>";
} elseif ($glucose <= 140) {
    echo "<p>Classificação: elevado</p>";
} else {
    echo "<p>Classificação: diabetes</p>";
}
