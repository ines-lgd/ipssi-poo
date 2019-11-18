<?php


namespace Ipssi\Evaluation;


class Forme extends Element
{
    protected $type;
    private $rgb;

    public function __construct(int $x, int $y, Couleur $rgb, string $type)
    {
        parent::__construct($x, $y);
        $this->rgb = $rgb;
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return Couleur
     */
    public function getRGB(): string 
    {
        return $this->rgb;
    }


}