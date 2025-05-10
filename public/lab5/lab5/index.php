<?php

require_once 'BankAccount.php';
require_once 'SavingsAccount.php';

echo "<!DOCTYPE html>
<html lang='uk'>
<head>
    <meta charset='UTF-8'>
    <title>Lab 5</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 2rem; }
        .account { padding: 1rem; }
        .error { color: red; }
    </style>
</head>
<body>
    <h1>Демонстрація роботи банківських рахунків</h1>";

try {
    $mainAccount = new BankAccount("USD", 100);
    $mainAccount->deposit(50);
    $mainAccount->withdraw(20);

    echo "<div class='account'>
            <h2>Основний рахунок</h2>
            <p>Валюта: {$mainAccount->getCurrency()}</p>
            <p>Поточний баланс: {$mainAccount->getBalance()}</p>
          </div>";
} catch (Exception $e) {
    echo "<p class='error'>Помилка: {$e->getMessage()}</p>";
}

try {
    $savings = new SavingsAccount("EUR", 200);
    SavingsAccount::$interestRate = 0.1;
    $savings->applyInterest();

    echo "<div class='account'>
            <h2>Накопичувальний рахунок</h2>
            <p>Валюта: {$savings->getCurrency()}</p>
            <p>Поточний баланс з відсотками: {$savings->getBalance()}</p>
          </div>";
} catch (Exception $e) {
    echo "<p class='error'>Помилка: {$e->getMessage()}</p>";
}

try {
    $invalid = new BankAccount("UAH", -100);
} catch (Exception $e) {
    echo "<p class='error'>Спроба створити рахунок з негативним балансом: {$e->getMessage()}</p>";
}

echo "</body></html>";
