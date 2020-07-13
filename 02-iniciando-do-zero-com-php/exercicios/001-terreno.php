<?php

$width = 12.0;
$length = 20.0;
$squareMeterPrice = 150.0;
$areaLand = $width * $length;
$priceLand = $areaLand * $squareMeterPrice;

echo "<p>Area do Terreno = " . number_format($areaLand, 2, ".", "") . "</p>";
echo "<p> Preço do Terreno = " . number_format($priceLand, 2, ".", "") . "</p>";
