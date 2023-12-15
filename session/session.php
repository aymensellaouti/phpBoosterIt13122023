<?php 
/*
   1 Si c'est la première visite => elle va afficher 'bienvenu chez nous' 
   2 Si c'est la néme visite => elle va afficher Bonjour, merci pour votre fidélité, c'est votre {n}éme visite
*/
session_start();
// Si ma variable nbVisite existe c'est que je suis déjà passé par la 
if(isset($_SESSION['nbVisite'])) {
    // J'incrémente mon nombre de visite de 1 puisque je fait une visite
    $nb = $_SESSION['nbVisite'] + 1;
    // j'affiche
    echo "Bonjour, merci pour votre fidélité, c'est votre $nb éme visite";
    // Je met à jour ma session
    $_SESSION['nbVisite'] = $nb;
// Le else c'est ma première visite
} else {
    $_SESSION['nbVisite'] = 1;  
    echo 'Bienvenu chez nous'; 
}