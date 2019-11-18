<?php


namespace Ipssi\Evaluation;


class Couleur
{
    protected $red;
    protected $green;
    protected $blue;

    public function __construct(int $red, int $green, int $blue)
    {
        $this->red = $red;
        $this->green = $green;
        $this->blue = $blue;

        if ($red > 255 || $green > 255 || $blue > 255) {
            echo 'Les paramètres ne peuvent pas être supérieurs à 255';
            die;
        }

    }

    public function getRGB()
    {
        return 'RGB('. $this->red . ', ' . $this->green . ', ' . $this->blue .')';
    }

    public function __toString()
    {
        return 'RGB('. $this->red . ', ' . $this->green . ', ' . $this->blue .')';
    }
}