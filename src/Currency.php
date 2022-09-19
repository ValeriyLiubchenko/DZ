<?php
var_dump(__DIR__);
class Currency
{
    private $isoCode;

    public function __construct($isoCode )
    {
        $this->SetIsoCode($isoCode);
    }

    private function SetIsoCode($valueIsoCode)
    {
        $this->isoCode = $valueIsoCode;
    }
    public function GetIsoCode()
    {
        return $this->isoCode;
    }
    private function validate($value)
    {
        $currency = [

        ];
        if (!in_array($value,$currency)){
            throw new InvalidArgumentException('Невалідне значення');
        }
    }
    public function equals(Currency $objectCurrency)
    {
        return $this == $objectCurrency;
    }
}