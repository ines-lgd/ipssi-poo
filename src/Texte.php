<?php


namespace Ipssi\Evaluation;


class Texte extends Element
{
    private $contenu;
    private $police;

    public function __construct(int $x, int $y, Couleur $rgb, string $contenu, string $police)
    {
        parent::__construct($x, $y, $rgb);
        $this->contenu = $contenu;
        $this->police = $police;
    }

    /**
     * @return mixed
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * @return mixed
     */
    public function getPolice()
    {
        return $this->police;
    }


}