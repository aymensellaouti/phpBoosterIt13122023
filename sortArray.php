<?php 

// 1 érer hypothése : On va trier un tableau PHP
    // trie = comparer et ordonner 
// 2 en php pas de type => tableau peut contenir plein de types différents
// 3 si c'est différent faut le normaliser
// 4 Le seul type possible c'est chaine
// 5 Pour comparer les chaines je vais utiliser les codes ASCII
    // et je compare caractère par caractère
// y a des fonctions (sort) qui me demande le type 
// Si le type que je veux comparer n'existe pas
    // usort et uasort me propose de leur
    // passer une fonction permettant de connaitre
    // la manière de trier