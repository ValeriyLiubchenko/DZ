<?php


class Color
{
    private int $red;
    private int $green;
    private int $blue;

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

    public static function random()
    {
//self !!!!
    }

    public function mix(Color $objectRed, Color $objectGreen, Color $objectBlue)
    {
        $new_Red = ($this->red + $objectRed->red) / 2;
        $new_Green = ($this->green + $objectGreen->green) / 2;
        $new_Blue = ($this->blue + $objectBlue->blue) / 2;
        return new Color($new_Red, $new_Green, $new_Green);
    }
}


$color1 = new Color(123, 3, 145);
$color2 = new Color(150, 133, 8);
$color3 = new Color(111, 143, 155);
