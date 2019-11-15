<?php


namespace Ipssi\Evaluation;


class Image extends Element
{
    private $nom;

    public function __construct(int $x, int $y, string $nom)
    {
        parent::__construct($x, $y);
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }


}