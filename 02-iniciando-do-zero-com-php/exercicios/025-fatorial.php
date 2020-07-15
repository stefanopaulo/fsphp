<?php

$number = 0;
$fat = 1;

if ($number > 0) {
    for ($i=1; $i <= $number; $i++) { 
        $fat *= $i;
    }
}

echo "<h1>Número: {$number}</h1>";
echo "<p>Fatorial: {$fat}</p>";
