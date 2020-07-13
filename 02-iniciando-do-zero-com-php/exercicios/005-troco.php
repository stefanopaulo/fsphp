<?php

$price = 30.00;
$amount = 3;
$moneyReceived = 100.00;
$change = $moneyReceived - $price * $amount;

echo "<p>Preço unitário = {$price}</p>";
echo "<p>Quantidade comprada = {$amount}</p>";
echo "<p>Dinheiro recebido = {$moneyReceived}</p>";
echo "<p>Troco = {$change}</p>";
