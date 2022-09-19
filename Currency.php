<?php
class Currency
{
private $isoCode;
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
}