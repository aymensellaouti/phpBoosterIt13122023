<?php
// TODO : chercher une méthode afin de générer un nombre aléatoire entre 0 et 20
$note = rand(0, 20);
$mention = "Pas de mention";
// Aller identifier la mention selon note
$class = "danger";
if ($note >= 16) {
    $mention = 'Très bien';
    $class = "success";
} elseif ($note >= 14) {
    $mention = 'Bien';
    $class = "primary";
} elseif ($note >= 12) {
    $mention = 'Assez bien';
    $class = "info";
} elseif ($note >= 10) {
    $mention = 'Passable';
    $class = 'warning';
}
// Identifier le message à afficher
$message = "Bonjour votre note est $note et votre mention est $mention";
