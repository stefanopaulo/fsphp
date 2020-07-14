<?php

$duration = 140811;
$hoursLeft = intdiv($duration, 3600);
$rest = $duration % 3600;
$minutesLeft = intdiv($rest, 60);
$secondsLeft = $rest % 60;

echo "<p>Duração em segundos: {$duration}</p>";
echo "{$hoursLeft} : {$minutesLeft} : {$secondsLeft}";
