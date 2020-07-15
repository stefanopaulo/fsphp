<?php

$price = 30.00;
$amount = 3.00;
$priceToPay = $price * $amount;
$moneyReceived = 70.00;

echo "<p>Preço unitário do produto: {$price}</p>";
echo "<p>Quantidade comprada: {$amount}</p>";
echo "<p>Dinheiro recebido: {$moneyReceived}</p>";

if ($moneyReceived < $priceToPay) {
    echo "<p>DINHEIRO INSUFICIENTE. FALTAM " . number_format($priceToPay - $moneyReceived, 2, ".", "") . " REAIS!</p>";
} else {
    echo "<p>TROCO = " . number_format($moneyReceived - $priceToPay, 2, ".", "") . "</p>";
}
