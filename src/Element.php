<?php


namespace Ipssi\Evaluation;


class Element
{
    protected $x;
    protected $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return '(x = ' . $this->x . ', y = ' . $this->y .')';
    }


}