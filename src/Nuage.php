<?php


namespace Ipssi\Evaluation;


class Nuage extends Forme
{
    private $nbBoucles;

    public function __construct(int $x, int $y, Couleur $rgb, string $type, int $nbBoucles)
    {
        parent::__construct($x, $y, $rgb, $type);
        $this->type = 'nuage';
        $this->nbBoucles = $nbBoucles;
    }

}