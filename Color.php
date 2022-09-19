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

    public function validation($value)
    {
        if (!is_int($value)) {
            throw new InvalidArgumentException('RGB параметри можуть бути лише цілими числами');
        }
        if ($value < 0 || $value > 255) {
            throw new InvalidArgumentException('Невірний діапазон параметрів RGB');
        }
    }

    private function setRed($valueRed)
    {
        $this->validation($valueRed);
        $this->red = $valueRed;
    }

    public function getRed()
    {
        return $this->red;
    }

    private function setGreen($valueGreen)
    {
        $this->validation($valueGreen);
            $this->green = $valueGreen;
    }

    public function getGreen()
    {
        return $this->green;
    }

    private function setBlue($valueBlue)
    {
        $this->validation($valueBlue);
            $this->blue = $valueBlue;
    }

    public function getBlue()
    {
        return $this->blue;
    }

    public function equals(Color $objectcolors)
    {
        return $this == $objectcolors;
    }

    public static function random()
    {
        return new Color(rand(0, 255), rand(0, 255), rand(0, 255));
    }

    public function mix(Color $objectcolor)
    {
        return new Color(($this->red + $objectcolor->red) / 2, ($this->green + $objectcolor->green) / 2, ($this->blue + $objectcolor->blue) / 2);
    }
}


$color1 = new Color('sdfd', 11, 148);
$color2 = new Color(150, 134, 8);
$color3 = new Color(110, 144, 156);
$color4 = new Color(124, 6, 148);
