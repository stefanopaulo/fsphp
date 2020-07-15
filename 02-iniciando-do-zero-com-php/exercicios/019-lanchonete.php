<?php

$code = 4;
$amount = 2;

switch ($code) {
    case 1:
        $priceToPay = $amount * 5;
        break;
    case 2:
        $priceToPay = $amount * 3.5;
        break;
    case 3:
        $priceToPay = $amount * 4.8;
        break;
    case 4:
        $priceToPay = $amount * 8.9;
        break;
    case 5:
        $priceToPay = $amount * 7.32;
        break;
    default:
        echo "<p>Código Inválido!</p>";
        break;
}

echo "<p>Código: {$code}</p>";
echo "<p>Quantidade: {$amount}</p>";
echo "<p>Valor a Pagar: " . number_format($priceToPay, 2, ".", "") . "</p>";
