<?php

$number = 4;

echo "<h1>Número: {$number}</h1>";

for ($i=1; $i <= 10; $i++) { 
    $mut = $number * $i;
    echo "<p>{$number} X {$i} = {$mut}</p>";
}
