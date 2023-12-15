<?php 

// On doit récupérer le cookie 
    // Si il n'existe pas 
        // Page qui va afficher le formulaire 
    // S'il existe
        // on affiche le message disant qu'il a déjà voté
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sondage</title>
</head>
<body>
    <?php if (!isset($_COOKIE['sondage'])) { ?>
    <form action="processSondage.php" method="post">
        Bon <input type="radio" value="bon" name="sondage">
        Moyen <input type="radio" value="moyen" name="sondage">
        Mauvais <input type="radio" value="mauvais" name="sondage">
        <input type="submit" value="voter">
    </form>
    <?php } else { ?>
        <div>Vous avez déjà voté et vous avez attribué l'évaluation suivante : </div>
            <?=$_COOKIE['sondage'] ?>
        </div>
    <?php }  ?>

</body>
</html>