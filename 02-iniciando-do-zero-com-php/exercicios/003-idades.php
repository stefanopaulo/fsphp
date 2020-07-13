<?php

$firstPersonName = "Maria Silva";
$firstPersonAge = 19;
$secondPersonsName = "João Melo";
$secondPersonAge = 20;
$avgAges = ($firstPersonAge + $secondPersonAge) / 2;

echo "<p> A media entre as idades de " . $firstPersonName . " e " . $secondPersonsName . " é de " . number_format($avgAges, 1, ".", "") . " anos. </p>";
