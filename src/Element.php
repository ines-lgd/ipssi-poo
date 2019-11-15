<?php


namespace Ipssi\Evaluation;


class Element
{
    protected $x;
    protected $y;
    protected $rgb;

    public function __construct(int $x, int $y, Couleur $rgb)
    {
        $this->x = $x;
        $this->y = $y;
        $this->rgb = $rgb;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return '(' . $this->x . ',' . $this->y .')';
    }


}