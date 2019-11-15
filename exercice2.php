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

$couleur1 = new Couleur(15,18,19);
$texte1 = new Texte(17,18, $couleur1, 'Bonjour à tous les amis', 'Comic Sans MS');
$image1 = new Image(100, 50, 'PhpStorm.jpg');
$nuage1 = new Nuage(200, 90, 'nuage',9);


