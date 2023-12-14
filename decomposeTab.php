<?php 
// Décomposer le 1er paramètre qui est un tableau,
// et de mettre les éléments pair dans le premier tabl 
// et les impaire dans le second 
function decompose(array $tab, array $pair, array &$impaire): void {
    foreach($tab as $element) {
        if($element % 2 == 0) {
            $pair[] = $element;
        } else {
            $impaire[] = $element;
        }
    }
    // echo "contenu de paire :";
    // var_dump($pair);
    // echo "contenu de impaire :";
    // var_dump($impaire);
}

$tab = [1,2,3,4,5,6,7,8,9,10,11,12,13];
$tabPair = [];
$tabImpair = [];

decompose($tab, $tabPair, $tabImpair);

var_dump($tabPair);
var_dump($tabImpair);

// fonction pure
// function somme($x, $y) {
//     return $x + $y;
// }