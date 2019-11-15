<?php

require_once('vendor/autoload.php');

$climate = new League\CLImate\CLImate;

class Diviseur {
    public function division(int $index, int $diviseur)
    {
        $valeurs = [17, 12, 15, 38, 29, 157, 89, -22, 0, 5];


        if ($diviseur === 0) {
            //DivisionByZeroError
            throw new Exception("Divison avec zéro impossible");
        } /*elseif (!is_int($diviseur) || !is_int($index)) {
            throw new Exception('Les saisies ne sont pas des nombres entiers');
        } */elseif ($index > 10) {
            throw new Exception('L\'indice saisi est supérieur au nombre de valeurs');
        } elseif ($index < 0) {
            throw new Exception('L\'indice saisi est négatif');
        }
        return $valeurs[$index] / $diviseur;
    }
}

do {
    $input = $climate->input("Entrez l’indice de l’entier à diviser : ");
    $index = $input->prompt();

    $input = $climate->input("Entrez le diviseur : ");
    $diviseur = $input->prompt();
    $erreur = false;

    try {
        $climate->output("Le résultat de la division est : " . (new Diviseur())->division($index, $diviseur));
        echo PHP_EOL;
    } catch (Exception $e) {
        $climate->output($e->getMessage());
        echo PHP_EOL;
        $erreur = true;
    }
} while ($erreur == true);


