<?php 
/* 
    2- Dans updateSettings, nous allons traiter le post 
        2-1 Récupérer les données
        2-2 Mettre à jour les cookies
*/
// Je récupére mes settings
    $settings = $_POST;
    if(isset($settings['color'])) {
        setcookie('color', $settings['color'], time() + 60 * 60 * 24);
    }    
    if(isset($settings['size'])) {
        setcookie('size', $settings['size'], time() + 60 * 60 * 24);
    }    
    if(isset($settings['font'])) {
        setcookie('font', $settings['font'], time() + 60 * 60 * 24);
    }

    header('location:accueil.php');