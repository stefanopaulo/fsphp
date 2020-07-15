<?php

$firstNote = 34.0;
$secondNote = 23.5;
$finalGrade = $firstNote + $secondNote;

echo "<p>Primeira Nota: {$firstNote}</p>";
echo "<p>Segunda Nota: {$secondNote}</p>";
echo "<p>NOTA FINAL = " . number_format($finalGrade, 1, ".", "") . "</p>";

if ($finalGrade < 60) {
    echo "<p>REPROVADO!</p>";
}
