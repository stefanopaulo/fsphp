<?php

$rectangleBase = 10.3;
$rectangleHeigth = 13.1;

$rectangleArea = $rectangleBase * $rectangleHeigth;
$perimeterRectangle = 2 * ($rectangleBase + $rectangleHeigth);
$diagonalRectangle = sqrt($rectangleBase ** 2 + $rectangleHeigth ** 2);

echo "<p>AREA = " . number_format($rectangleArea, 4, ".", "") . "</p>";
echo "<p>PERIMETRO = " . number_format($perimeterRectangle, 4, ".", "") . "</p>";
echo "<p>DIAGONAL = " . number_format($diagonalRectangle, 4, ".", "") . "</p>";
