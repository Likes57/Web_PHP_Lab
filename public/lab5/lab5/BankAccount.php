<?php

require_once 'AccountInterface.php';

class BankAccount implements AccountInterface {
    public const MIN_BALANCE = 0.0;

    protected float $balance;
    protected string $currency;

    public function __construct(string $currency, float $initialBalance = 0.0) {
        if ($initialBalance < self::MIN_BALANCE) {
            throw new Exception("Початковий баланс не може бути меншим за мінімальний.");
        }
        $this->currency = $currency;
        $this->balance = $initialBalance;
    }

    public function deposit(float $amount): void {
        if ($amount <= 0) {
            throw new Exception("Сума поповнення має бути додатною.");
        }
        $this->balance += $amount;
    }

    public function withdraw(float $amount): void {
        if ($amount <= 0) {
            throw new Exception("Сума зняття має бути додатною.");
        }

        if ($this->balance - $amount < self::MIN_BALANCE) {
            throw new Exception("Недостатньо коштів.");
        }

        $this->balance -= $amount;
    }

    public function getBalance(): float {
        return $this->balance;
    }

    public function getCurrency(): string {
        return $this->currency;
    }
}
