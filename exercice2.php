<?php

require_once('vendor/autoload.php');

$climate = new League\CLImate\CLImate;
use Ipssi\Evaluation\Couleur;
use Ipssi\Evaluation\Element;
use Ipssi\Evaluation\Texte;
use Ipssi\Evaluation\Image;
use Ipssi\Evaluation\Forme;
use Ipssi\Evaluation\Etoile;
use Ipssi\Evaluation\Nuage;

$couleur1 = new Couleur(75,0,130);
$couleur2 = new Couleur(0,128,128);
$couleur3 = new Couleur(15,18,19);
$texte1 = new Texte(17,18, $couleur1, 'Bonjour à tous');
$image1 = new Image(100, 50, 'PhpStorm.jpg');
$nuage1 = new Nuage(200, 90, $couleur1,'nuage',9);
$etoile1 = new Etoile(50,20, $couleur3, 'etoile', 9);

echo PHP_EOL . PHP_EOL;
echo "Affichage du document" . PHP_EOL;
echo "=====================" . PHP_EOL;

echo "Le document est de couleur " . $couleur2->getRGB() . PHP_EOL . PHP_EOL;

echo "Il contient le texte \"" . $texte1->getContenu() . "\"" . PHP_EOL;
echo "de couleur " . $texte1->getRGB() . " et de position " . $texte1->getPosition() . "." . PHP_EOL . PHP_EOL;

echo "Il contient aussi une image nommée \"" . $image1->getNom() . "\" de position " . $image1->getPosition();
echo "," . PHP_EOL . "une forme de type \"" . $nuage1->getType() . "\" de position " . $nuage1->getPosition() .
    " et de couleur " . $nuage1->getRGB() . "," . PHP_EOL;
echo "ainsi qu'une forme de type \"" . $etoile1->getType() . "\" de position " . $etoile1->getPosition() .
    " et de couleur " . $etoile1->getRGB(). "." .PHP_EOL;
