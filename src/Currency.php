<?php

namespace Hillel;
class Currency
{
    private string $isoCode;

    public function __construct($isoCode)
    {
        $this->SetIsoCode($isoCode);
    }

    private function SetIsoCode($valueIsoCode)
    {
        $this->validate($valueIsoCode);
        $this->isoCode = $valueIsoCode;
    }

    public function GetIsoCode()
    {
        return $this->isoCode;
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

    public function equals(Currency $objectCurrency)
    {
        return $this == $objectCurrency;
    }
}