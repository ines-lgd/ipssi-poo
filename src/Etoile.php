<?php


namespace Ipssi\Evaluation;


class Etoile extends Forme
{
    private $nbBranches;

    public function __construct(int $x, int $y, Couleur $rgb, string $type, int $nbBranches)
    {
        parent::__construct($x, $y, $rgb);
        $this->type = 'nuage';
        $this->nbBranches = $nbBranches;
    }

}