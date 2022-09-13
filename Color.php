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

    public function equals( Color $objectcolors)
    {
return $this == $objectcolors;
    }

    public static function random()
    {
return new Color(rand(0,255),rand(0,255),rand(0,255));
    }

    public function mix(Color $objectcolor)
    {
        return new Color(($this->red + $objectcolor->red) / 2, ($this->green + $objectcolor->green) / 2, ($this->blue + $objectcolor->blue) / 2);
    }
}


$color1 = new Color(124, 6, 148);
$color2 = new Color(150, 134, 8);
$color3 = new Color(110, 144, 156);
$color4 = new Color(124, 6, 148);
