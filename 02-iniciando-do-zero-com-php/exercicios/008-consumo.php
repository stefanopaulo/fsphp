<?php

$travelledDistance = 1108;
$spentFuel = 71.4;
$avgConsumption = $travelledDistance / $spentFuel;

echo "<p>Distância percorrida: {$travelledDistance}</p>";
echo "<p>Combustivel gasto: {$spentFuel}</p>";
echo "<p>Consumo médio: " . number_format($avgConsumption, 3, ".", "") . "</p>";
