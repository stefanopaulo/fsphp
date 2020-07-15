<?php

$distanceOne = 79.60;
$distanceTwo = 87.60;
$distanceThree = 83.21;

echo "<p>DISTÂNCIAS</p>";
echo "<p>{$distanceOne}</p>";
echo "<p>{$distanceTwo}</p>";
echo "<p>{$distanceThree}</p>";

if ($distanceOne > $distanceTwo && $distanceOne > $distanceThree) {
    $greaterDistance = $distanceOne;
} elseif ($distanceTwo > $distanceThree) {
    $greaterDistance = $distanceTwo;
} else {
    $greaterDistance = $distanceThree;
}

echo "<p>MAIOR DISTÂNCIA: " . number_format($greaterDistance, 2, ".", "") . "</p>";
