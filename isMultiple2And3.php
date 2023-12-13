<?php

// Objet faux == null
// Chiffre faux == ''
// entier faux == 0
// Boolean faux c'est false

$nombre = rand(0,100);
// Il faut qu'il soit multiple de 2 et de 3

// !quelquechose => quelquechose est faux => si on a un nombre queqlquechose == 0
if ( !($nombre % 2) && !($nombre % 3)) {
    echo "$nombre est à la fois multiple de 2 et de 3";
} else {
    echo "$nombre n'est pas à la fois multiple de 2 et de 3";
}