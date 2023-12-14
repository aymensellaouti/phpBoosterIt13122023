<?php 
// 1- Déclarer les variables
$nbTentative = 0;
$element1;
$element2;
$element3;
// 2- Boucler jusqu'à avoir le résultat => un do while 
    do {
        // Je compte le nombre de tentative
        $nbTentative++;
        // Créer une tentative
        $element1 = random_int(1,100);
        $element2 = random_int(1,100);
        $element3 = random_int(1,100);
        // L'afficher
        echo "Tentative $nbTentative: $element1, $element2, $element3".PHP_EOL;
        // ne pas avoir la suite attendue : 1 nombre pair et 2 impaire
    } while ( !( !($element1 % 2) && ($element2 % 2) && ($element3 % 2) ) );
    // Afficher le nombre de tentative
    echo "Le nombre de tentative est : $nbTentative".PHP_EOL;
?>