<?php

class Money
{
    private int $amount;
    private string $currency;

    public function __construct($amount, $currency)
    {
        $this->SetAmount($amount);
        $this->SetCurrency($currency);
    }

    private function SetCurrency($valueCurrency)
    {
        $this->validate($valueCurrency);
        $this->currency = $valueCurrency;
    }

    public function GetCurrency()
    {
        return $this->currency;
    }

    private function SetAmount($valueAmount)
    {
        if ($valueAmount >= 0)
            $this->amount = $valueAmount;
        else  throw new \InvalidArgumentException('Невалідне значення');
    }

    public function GetAmount()
    {
        return $this->amount;
    }

    private function validate($value)
    {
        $currency = [
            'USD',
            'UAH',
            'EUR',
            'GBP',
            'CHF',
            'JPY',
            'CNY',
            'ILS'
        ];
        if (!in_array($value, $currency)) {
            throw new \InvalidArgumentException('INVALID Currency');
        }
    }

    public function equals(Money $objectMoney)
    {
        return $this->amount == $objectMoney->amount && $this->currency == $objectMoney->currency;
    }

    public function add(Money $objectMoney)
    {
        if ($this->currency == $objectMoney->currency)
        {
            return new Money($this->amount + $objectMoney->amount, $this->currency);
        }
        else throw new \InvalidArgumentException('Різні валюти');
    }
}