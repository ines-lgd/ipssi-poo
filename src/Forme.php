<?php


namespace Ipssi\Evaluation;


class Forme extends Element
{
    protected $type;

    public function __construct(int $x, int $y, Couleur $rgb, string $type)
    {
        parent::__construct($x, $y, $rgb);
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }



}