<?php


namespace Ipssi\Evaluation;


class Texte extends Element
{
    private $rgb;
    private $contenu;

    public function __construct(int $x, int $y, Couleur $rgb, string $contenu)
    {
        parent::__construct($x, $y);
        $this->rgb = $rgb;
        $this->contenu = $contenu;
    }


    /**
     * @return mixed
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * @return string
     */
    public function getRGB(): string
    {
        return $this->rgb;
    }


}