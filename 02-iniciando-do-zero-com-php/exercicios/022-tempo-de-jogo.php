<?php

$startTime = 0;
$finalHour = 0;

if ($finalHour <= $startTime) {
    $duration = $finalHour - $startTime + 24;
} else {
    $duration = $finalHour - $startTime;
}

echo "<p>Hora Inicial: {$startTime}</p>";
echo "<p>Hora Final: {$finalHour}</p>";
echo "<p>O JOGO DUROU {$duration} HORAS.</p>";
