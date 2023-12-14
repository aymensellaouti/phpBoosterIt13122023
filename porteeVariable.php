<?php
$name = 'aymen';

$age = 20;
function affichage() {
    // 1ére méthode
    // global $name;
    $name = 'autre nom';
    $age = 40;
    echo "Je m'appelle ".$name." et j'ai ".$age.PHP_EOL;
    echo "Je m'appelle ".$GLOBALS['name']." et j'ai ".$GLOBALS['age'];
}
affichage();

unset($age);

// echo $age;

