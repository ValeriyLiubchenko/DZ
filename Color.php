<?php


class Color
{
    private float $red;
    private float $green;
    private float $blue;

    public function __construct($red, $green, $blue)
    {
        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);
    }

    private function setRed($valueRed)
    {
        if ($valueRed >= 0 && $valueRed <= 255) {
            $this->red = $valueRed;
        } else echo "Sry It's not true";
    }

    public function getRed()
    {
        return $this->red;
    }

    private function setGreen($valueGreen)
    {
        if ($valueGreen >= 0 && $valueGreen <= 255) {
            $this->green = $valueGreen;
        } else echo "Sry It's not true";
    }

    public function getGreen()
    {
        return $this->green;
    }

    private function setBlue($valueBlue)
    {
        if ($valueBlue >= 0 && $valueBlue <= 255) {
            $this->blue = $valueBlue;
        } else echo "Sry It's not true";
    }

    public function getBlue()
    {
        return $this->blue;
    }

    public function equals()
    {

    }
}


$color1 = new Color(123, 3, 145);
$color2 = new Color(150, 133, 8);
$color3 = new Color(111, 143, 155);
var_dump($color1);